<?php

namespace App\Http\Controllers;

use App\Facades\Cart;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Psy\Util\Str;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment as ShetabitPayment;

class OrderController extends Controller
{
    public function shipping_view(Order $order)
    {
        return view('cart.shipping', compact('order'));
    }


    public function registerOrder()
    {
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
                'price' => $price
            ]);

            $order->productInfos()->attach($orderItems);


            //payment

            $invoice = (new Invoice)->amount(1000);
            return ShetabitPayment::callbackUrl(route('payment.callback'))->purchase($invoice, function ($driver, $transactionId) use ($order) {
                $order->payments()->create([
                    'res_number' => $transactionId,
                    //4-حذف تمام محصولات موجود در سید خرید
                    /* $cart->flush();*/
                ]);
            })->pay()->render();

        }
    }

    public function payment_callback(Request $request)
    {
        $payment = Payment::where('resnumber', $request->clientrefid)->firstOrFail();

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
            /**
             * when payment is not verified, it will throw an exception.
             * We can catch the exception to handle invalid payments.
             * getMessage method, returns a suitable message that can be used in user interface.
             **/
            echo $exception->getMessage();
        }

        /*
        //1-پیدا کردن پرداختی که الان برگشته از جدول دیتابیس خودمون توسط ایدی یونیک
        //که از اینجا هم باید سفارش را پیدا کنیم تا مبلغ بدست بیاد
        $payment = Payment::where('resnumber', $request->clientrefid)->firstOrFail();

        //2-ارتباط با درگاه پرداخت
        $token = config('services.payping.token');

        $payping = new \PayPing\Payment($token);

        try {
            // $payment->price
            if ($payping->verify($request->refid, 1000)) {
                $payment->update([
                    'status' => 1
                ]);

                $payment->order()->update([
                    'status' => 'paid'
                ]);

                alert()->success('پرداخت شما موفق بود');
                return redirect('/products');
            } else {
                alert()->error('پرداخت شما تایید نشد');
                return redirect('/products');
            }
        } catch (\Exception $e) {
            $errors = collect(json_decode($e->getMessage(), true));

            alert()->error($errors->first());
            return redirect('/products');
        }*/

    }
}
