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
        $product_parent_cats = ProductCategory::where('parent', 0)->get();


        $mainSliders = GlobalOptions::where('key', "main_sliders")->get();
        $mainBanners = GlobalOptions::where('key', 'main_banners')->get();





        return view('welcome', compact(
            'articles',
            'products',
            'product_parent_cats',
            'mainSliders',
            'mainBanners',
         
        ));
    }
}
