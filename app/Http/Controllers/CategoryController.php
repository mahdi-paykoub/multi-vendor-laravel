<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class CategoryController extends Controller
{
    public function categoryProducts(ProductCategory $productCategory)
    {
        $cat_name = $productCategory->title;
        $products = $productCategory->products()->paginate(6);
        $cat_childs = $productCategory->child()->get();


        $parentsName = $this->getParentsName($productCategory);


        return view('category.product', compact('products', 'cat_name', 'cat_childs' ,'parentsName' ));
    }


    public function getParentsName($productCategory)
    {
        $parentsID = $productCategory->parent;

        $parentsName = [];
        while ($parentsID != 0) {
            
            $parent_model = ProductCategory::where('id', $parentsID)->first();
            
            $parentsName[$parent_model->slug] = $parent_model->title;
           
            $parentsID = $parent_model->parent;
          
        }
        return $parentsName;
    }
}