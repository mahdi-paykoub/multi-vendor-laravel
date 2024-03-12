<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
   
    public function getSearchedProduct(Request $request) {
        $results =Product::where('title', 'like', "%{$request['search']}%")
        ->orWhere('description' , 'like', "%{$request['search']}%")->get();


        return view('search.search' ,compact('results'));
    }
}