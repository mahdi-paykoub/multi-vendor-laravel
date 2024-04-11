<?php

use App\Models\GlobalOptions;
use App\Models\Seller;
use Hamcrest\Arrays\IsArray;
use Illuminate\Support\Facades\Route;

if (!function_exists('image_url_assets')) {
    function image_url_assets($img, $thumbnail)
    {
        return $img ? $img : $thumbnail;
    }
}

if (!function_exists('get_site_itself_productInfo')) {
    function get_site_itself_productInfo($product)
    {
        $query_site_condition = $product->productInfos()->where('seller_id', 1)->first();
        return $query_site_condition === null ?
            ($product->productInfos()->first())
            : $query_site_condition;
    }
}

if (!function_exists('is_active_route')) {
    function is_active_route($routeName, $activeClass)
    {
        if (Route::currentRouteName() == $routeName) {
            return $activeClass;
        }
        return '';
    }
}
if (!function_exists('is_active_seller_route')) {
    function is_active_seller_route($routeName, $activeClass)
    {
        return in_array(Route::currentRouteName(), $routeName);
    }
}



if (!function_exists('get_en_logo')) {
    function get_en_logo()
    {
        $en_logo = GlobalOptions::where('key', 'en_logo')->first();
        if ($en_logo != null) {
            return $en_logo->value;
        } else {
            return url('assets/frontend/image/logo/en_logo_not_loaded.png');
        }
    }
}



if (!function_exists('get_fa_logo')) {
    function get_fa_logo()
    {
        $fa_logo = GlobalOptions::where('key', 'fa_logo')->first();
        if ($fa_logo != null) {
            return $fa_logo->value;
        } else {
            return url('assets/frontend/image/logo/en_logo_not_loaded.png');
        }
    }
}

if (!function_exists('get_seller_by_token')) {
    function get_seller_by_token()
    {
        return Seller::where('token', session('seller_token'))->first();
    }
}

if (!function_exists('has_info_confirmed')) {
    function has_info_confirmed($sellerInfo, $value)
    {
        $array = is_array(json_decode($sellerInfo->confirmed_parts)) ? json_decode($sellerInfo->confirmed_parts) : [];
        return in_array($value, $array);
    }
}
if (!function_exists('get_seller_status')) {
    function get_seller_status()
    {
        return get_seller_by_token()->status;
    }
}
