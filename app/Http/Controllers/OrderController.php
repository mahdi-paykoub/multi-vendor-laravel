<?php

namespace App\Http\Controllers;

use App\Facades\Cart;
use App\Models\Address;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Psy\Util\Str;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment as ShetabitPayment;

class OrderController extends Controller
{
    public function shipping_view(Order $order)
    {
        $userAddress = Address::where('addressable_type', User::class)->where('addressable_id', auth()->user()->id)->get();

        if (count($userAddress) != 0) {
            return view('cart.shipping', compact('order', 'userAddress'));
        } else {
            return view('cart.shipping', compact('order'));
        }
    }


    public function registerOrder(Request $request)
    {
        $validData = $request->validate([
            'address_id' => 'required',
        ]);

        $user_addres = Address::find($validData['address_id']);
        if ($user_addres->addressable_type != User::class) {
            return back();
        } else {
            if ($user_addres->addressable_id != auth()->user()->id) {
                return back();
            }
        }

        $cartItems = Cart::all();

        if (count($cartItems) !== 0) {
            $price = $cartItems->sum(function ($cart) {
                return $cart['productInfo']['price'] * $cart['count'];
            });


            $orderItems = $cartItems->mapWithKeys(function ($cart) {
                return [$cart['productInfo']['id'] => ['quantity' => (int)$cart['count']]];
            });


            $order = auth()->user()->orders()->create([
                'status' => 'unpaid',
                'price' => $price,
                'address_id' => $user_addres->id
            ]);

            $order->productInfos()->attach($orderItems);


            //payment

            $invoice = (new Invoice)->amount(1000);
            return ShetabitPayment::callbackUrl(route('payment.callback'))->purchase($invoice, function ($driver, $transactionId) use ($order, $invoice) {
                $order->payments()->create([
                    'res_number' => $invoice->getUuid(),
                    //4-حذف تمام محصولات موجود در سید خرید
                    /* $cart->flush();*/
                ]);
            })->pay()->render();
        }
    }

    public function payment_callback(Request $request)
    {
        $payment = Payment::where('res_number', $request->clientrefid)->firstOrFail();

        try {
            $receipt = ShetabitPayment::amount(1000)->transactionId($request->clientrefid)->verify();
            $payment->update([
                'status' => 1
            ]);

            $payment->order()->update([
                'status' => 'paid'
            ]);
            /*redirect here*/
        } catch (InvalidPaymentException $exception) {
            return redirect(route('checkout.thank-you'));
        }
    }
    public function show_thank_you()
    {
        return view('cart.thank_you');
    }
}
