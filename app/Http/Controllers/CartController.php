<?php

namespace App\Http\Controllers;

use App\Facades\Cart;
use App\Models\ProductInfo;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop_cart_view()
    {
        return view('cart.cart');
    }

    public function add_to_cart(ProductInfo $productInfo)
    {


        if (!Cart::has($productInfo)) {
            Cart::put([
                'quantity' => 1,
            ],
                $productInfo
            );
        }


    }
}
