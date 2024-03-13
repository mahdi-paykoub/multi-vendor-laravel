<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\GlobalOptions;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article::take(4)->get();
        $products = Product::all();
        $product_parent_cats=ProductCategory::where('parent' , 0)->get();
        $mainSliderBanners = (GlobalOptions::where('key' ,'mainSlider')->first());
    
        $sliders_values =isset( $mainSliderBanners['value']) ?json_decode($mainSliderBanners['value']) :[] ;


        $first_banner_1=   isset(\App\Models\GlobalOptions::where('key' ,'=' , 'first_banner_1')->first()->value) ?
        json_decode( \App\Models\GlobalOptions::where('key' ,'=' , 'first_banner_1')->first()->value) :
        '';
       $first_banner_2=   isset(\App\Models\GlobalOptions::where('key' ,'=' , 'first_banner_2')->first()->value) ?
        json_decode( \App\Models\GlobalOptions::where('key' ,'=' , 'first_banner_2')->first()->value) :
        '';
        $first_banner_3=   isset(\App\Models\GlobalOptions::where('key' ,'=' , 'first_banner_3')->first()->value) ?
        json_decode( \App\Models\GlobalOptions::where('key' ,'=' , 'first_banner_3')->first()->value) :
        '';
         $first_banner_4=   isset(\App\Models\GlobalOptions::where('key' ,'=' , 'first_banner_4')->first()->value) ?
        json_decode( \App\Models\GlobalOptions::where('key' ,'=' , 'first_banner_4')->first()->value) :
        '';


        return view('welcome', compact('articles', 'products','product_parent_cats','sliders_values',
            'first_banner_1','first_banner_2','first_banner_3', 'first_banner_4' ));
    }
}