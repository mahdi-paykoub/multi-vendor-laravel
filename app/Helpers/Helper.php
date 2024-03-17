<?php

use App\Models\GlobalOptions;

function image_url_assets($img, $thumbnail)
{
    return $img ? $img : $thumbnail;
}

function get_site_itself_productInfo($product)
{
    $query_site_condition = $product->productInfos()->where('seller_id', 1)->first();
    return $query_site_condition === null ?
        ($product->productInfos()->first())
        : $query_site_condition;
}

if (!function_exists('is_active_route')) {
    function is_active_route($routeName, $activeClass)
    {
        if (\Illuminate\Support\Facades\Route::currentRouteName() == $routeName) {
            return $activeClass;
        }
        return '';
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
