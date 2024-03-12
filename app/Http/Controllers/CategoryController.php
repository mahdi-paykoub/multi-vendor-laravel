<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryProducts(ProductCategory $productCategory)
    {
        $products =$productCategory->products()->get();
        return view('category.product' , compact('products'));
    }
}