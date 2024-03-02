<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class SellerPanelViewController extends Controller
{
    public function index()
    {
        return view('seller.panel.index');
    }

    public function find_product()
    {
        return view('seller.panel.find');
    }

    public function add_product_v()
    {
        $product_cats = ProductCategory::where('parent', '=', 0)->get();
        $brands = Brand::all();
        return view('seller.panel.create', compact('product_cats', 'brands'));
    }

}
