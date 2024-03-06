<?php

namespace App\Http\Controllers;

use App\Facades\Cart;
use App\Models\Product;
use App\Models\ProductInfo;
use http\Env\Response;
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
            $product = Product::find($productInfo->product_id);
            $product_img = $product->galleries()->first();
            Cart::put([
                'count' => 1,
            ],
                $productInfo
            );
            return response(['status' => true, 'img' => $product_img, 'title' => $product->title]);
        }
        return response(['status' => false, 'msg' => 'این کالا در سبد خرید شما موجود است.']);
    }

    public function delete_from_cart(ProductInfo $productInfo)
    {
        if (Cart::has($productInfo)) {
           return Cart::delete($productInfo);
        }
    }

    public function increaseProductCount(ProductInfo $productInfo)
    {
        if (Cart::has($productInfo)) {
            return Cart::updateProductCount($productInfo);
        }
    }

}
