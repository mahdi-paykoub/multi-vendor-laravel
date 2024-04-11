<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Notification;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductInfo;
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
        $phone_number = get_seller_by_token()->phone_number;
        return view('seller.profile.seller_info', compact('seller_info', 'phone_number'));
    }

    public function seller_profile_address()
    {
        $user_addresses = get_seller_by_token()->addresses()->get();
        $shop_info = get_seller_by_token()->sellerInfo()->first();
        return view('seller.profile.seller_address', compact('user_addresses', 'shop_info'));
    }
    public function seller_profile_store_info()
    {
        $shop_info = get_seller_by_token()->sellerInfo()->first();
        return view('seller.profile.store_info', compact('shop_info'));
    }

    public function seller_profile_finance()
    {
        $seller_info = get_seller_by_token()->sellerInfo()->first();
        return view('seller.profile.seller_finance', compact('seller_info'));
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
        $products = Product::paginate(20);
        return view('seller.panel.find', compact('products'));
    }

    public function add_product_v()
    {
        $product_cats = ProductCategory::where('parent', '=', 0)->get();
        $brands = Brand::all();
        return view('seller.panel.create', compact('product_cats', 'brands'));
    }
    public function seller_notofications()
    {
        return view('seller.panel.notification');
    }
    public function seller_notofication_detail(Notification $notification)
    {
        return view('seller.panel.notification_detail', compact('notification'));
    }
    public function product_management()
    {
        $seller_products = [];
        $product_infos = get_seller_by_token()->productInfos()->get()->unique('product_id');

        foreach ($product_infos as $product_info) {
            $seller_products[] = $product_info->product()->first();
        }
        return view('seller.panel.product_management', compact('seller_products'));
    }
    public function seller_orders()
    {
        return view('seller.panel.orders');
    }
}
