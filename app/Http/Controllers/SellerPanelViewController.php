<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\ProductCategory;
use App\Models\SellerInfo;
use Illuminate\Http\Request;

class SellerPanelViewController extends Controller
{
    public function index()
    {
        return view('seller.panel.index');
    }

    public function seller_profile()
    {
        $seller_info = get_seller_by_token()->sellerInfo()->first();
        $phone_number=get_seller_by_token()->phone_number;
        return view('seller.profile.seller_info' ,compact('seller_info','phone_number'));
    }

    public function seller_profile_address()
    {
        $user_addresses = get_seller_by_token()->addresses()->get();
        return view('seller.profile.seller_address' ,compact('user_addresses'));
    }
    public function seller_profile_store_info()
    {
        $shop_info = get_seller_by_token()->sellerInfo()->first();
        return view('seller.profile.store_info' , compact('shop_info'));
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
