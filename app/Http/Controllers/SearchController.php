<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class SearchController extends Controller
{
   
    public function getSearchedProduct(Request $request) {
        $results =Product::where('title', 'like', "%{$request['search']}%")
        ->orWhere('description' , 'like', "%{$request['search']}%")->get();


        return view('search.search' ,compact('results'));
    }

    public function searchAjax(Request $request){
        

        $cats = ProductCategory::where('title', 'like', "%{$request['value']}%")->get();

        $products_results= Product::where('title', 'like', "%{$request['value']}%")->get();

        $products=[];

        foreach($products_results as $products_result){
           $img =  $products_result->galleries->first()->image;

           $products[] = ['img' => $img , 'title' =>$products_result->title , 'slug'=>$products_result->slug ];
        }


       
        return response([
            'cats' => $cats , 
            'products' =>$products
        ]);

    }

}