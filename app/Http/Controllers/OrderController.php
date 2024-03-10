<?php

namespace App\Http\Controllers;

use App\Facades\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function shipping_view()
    {
        return view('cart.shipping');
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

            return redirect(route('shipping.view'));
        }
    }
}
