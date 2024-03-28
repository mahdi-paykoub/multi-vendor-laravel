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

    public function seller_profile()
    {
        return view('seller.profile.seller_info');
    }

    public function seller_profile_address()
    {
        return view('seller.profile.seller_address');
    }
    public function seller_profile_store_info()
    {
        return view('seller.profile.store_info');
    }
    
    public function seller_profile_finance()
    {
        return view('seller.profile.seller_finance');
    }
    public function seller_profile_document_info()
    {
        return view('seller.profile.seller_upload_document');
    }

    public function seller_landing()
    {
        return view('seller.landing');
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
