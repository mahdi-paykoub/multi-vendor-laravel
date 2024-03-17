<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GlobalOptions;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productCategories = ProductCategory::where('parent', 0)->get();
        return view('admin.product_category.all', compact('productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required',
            'parent' => 'required',
            'slug' => 'required|unique:product_categories',
            'img' => 'required',
        ]);
        ProductCategory::create($validData);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('admin.product_category.landing');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function select_category_view()
    {
        $cats = ProductCategory::where('parent', 0)->get();
        return view('admin.product_category.select_category', compact('cats'));
    }

    public function show_landing(ProductCategory $productCategory)
    {
        $cat_id = $productCategory->id;

        $cat_sliders = GlobalOptions::where('key', 'main_category_sliders')->where('ref_id', $cat_id)->get();

        $cat_banners = GlobalOptions::where('key', 'main_category_banners')->where('ref_id', $cat_id)->get();

        return view('admin.product_category.landing', compact('cat_id', 'cat_sliders', 'cat_banners'));
    }

    public function create_landing_slider(Request $request, $id)
    {

        $validData = $request->validate([
            'slider' => 'required',
            'slider.*' => 'required',
            'slider.*.*' => 'required',
        ]);



        foreach ($validData['slider'] as $key => $slide) {
            GlobalOptions::create([
                'key' => 'main_category_sliders',
                'value' => json_encode($slide),
                'ref_id' => $id
            ]);
        }

        return back();
    }

    public function create_landing_banner(Request $request, $id)
    {

        $validData = $request->validate([
            'slider' => 'required',
            'slider.*' => 'required',
            'slider.*.*' => 'required',
        ]);



        foreach ($validData['slider'] as $key => $slide) {
            GlobalOptions::create([
                'key' => 'main_category_banners',
                'value' => json_encode($slide),
                'ref_id' => $id
            ]);
        }

        return back();
    }
}
