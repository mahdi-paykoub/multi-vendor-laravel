<?php

namespace App\Http\Controllers;

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


        return view('product.singleProduct', compact('singleProduct', 'images', 'infos', 'attrs'));
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
            $productArray = ['productInfo' => $productInfo, 'sellerInfo' => $seller];


            $returned_data[] = $productArray;
        }

        return response($returned_data);
    }
}
