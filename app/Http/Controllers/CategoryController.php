<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class CategoryController extends Controller
{

    protected $childsName;

    public function __construct()
    {
        $this->childsName = [];
    }
    public function mainOrSubCategory(ProductCategory $productCategory)
    {


        $parent = $productCategory->parent;
        $cat_childs = $productCategory->child()->get();



        if ($parent != 0) {

            $cat_name = $productCategory->title;
            $products = $productCategory->products()->paginate(6);



            $parentsName = $this->getParentsName($productCategory);
            return view('category.product', compact('products', 'cat_name', 'cat_childs', 'parentsName'));
        } elseif ($parent == 0) {

            $this->getAllCatChilds($productCategory);

            $allChilds = $this->childsName;
            $products = $productCategory->products()->get();
            return view('category.main_category', compact('cat_childs', 'products', 'allChilds'));
        }
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

    public function getAllCatChilds($category)
    {
        foreach ($category->child()->get() as $cat) {

            $this->childsName[] = $cat;

            if ($cat->child()->count()) {
                $this->getAllCatChilds($cat);
            }
        }
    }
}
