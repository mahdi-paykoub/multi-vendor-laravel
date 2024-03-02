<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article::take(4)->get();
        $products = Product::all();
        return view('welcome', compact('articles', 'products'));
    }
}
