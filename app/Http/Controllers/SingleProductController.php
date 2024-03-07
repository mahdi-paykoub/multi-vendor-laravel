<?php

namespace App\Http\Controllers;

use App\Facades\Cart;
use App\Models\Product;
use App\Models\Seller;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function showSingleProduct(Product $singleProduct)
    {
        $images = $singleProduct->galleries()->get();
        $infos = $singleProduct->productInfos()->get();
        $attrs = $singleProduct->productAttributes()->get();
        $comments = $singleProduct->comments()->where('parent_id', 0)->orderBy('id', 'DESC')->get();

        return view('product.singleProduct', compact('singleProduct', 'images', 'infos', 'attrs','comments'));
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
}
