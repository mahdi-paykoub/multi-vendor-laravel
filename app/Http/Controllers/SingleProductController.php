<?php

namespace App\Http\Controllers;

use App\Facades\Cart;
use App\Models\Like;
use App\Models\Product;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SingleProductController extends Controller
{
    public function showSingleProduct(Product $singleProduct)
    {
        $images = $singleProduct->galleries()->get();
        $infos = $singleProduct->productInfos()->get();
        $attrs = $singleProduct->productAttributes()->get();
        $comments = $singleProduct->comments()->where('parent_id', 0)->orderBy('id', 'DESC')->get();
        $relatedProducts = $singleProduct->productCategories()->first()->products()->where('id', '!=', $singleProduct->id)->get();

        $is_liked = null;
        if (Auth::check()) {
            $is_liked = Like::where('user_id', auth()->user()->id)->where('product_id', $singleProduct->id)->first();
        }

        $wishLists = [];
        if (Auth::check()) {
            $wishLists = auth()->user()->wishLists()->get();
        }
        return view('product.singleProduct', compact('singleProduct', 'images', 'infos', 'attrs', 'comments', 'is_liked', 'wishLists', 'relatedProducts'));
    }

    public function getProductInfoByColor(Request $request)
    {
        $validData = $request->validate([
            'productId' => 'required',
            'colorId' => 'required',
        ]);

        $returned_data = [];

        $productInfos = Product::find($validData['productId'])->productInfos()->where('attr_value_id', $validData['colorId'])->get();

        foreach ($productInfos as $productInfo) {
            $seller = Seller::find($productInfo->seller_id)->sellerInfo()->first();

            $isInShopCart = Cart::has($productInfo);

            $productArray = ['productInfo' => $productInfo, 'sellerInfo' => $seller, 'isInCart' => $isInShopCart];


            $returned_data[] = $productArray;
        }

        return response($returned_data);
    }
    public function like_product(Request $request)
    {
        if (Auth::check()) {
            $validData = $request->validate([
                'productId' => 'required',
            ]);

            $is_like = Like::where('user_id', auth()->user()->id)->where('product_id', $validData['productId'])->first();

            if ($is_like == null) {
                Like::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $validData['productId']
                ]);
                return response(['status' => 'create']);
            } else {
                $is_like->delete();
                return response(['status' => 'delete']);
            }
        }
        return response(['status' => false, 'url' => route('login')]);
    }
}
