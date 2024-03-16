<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articleCategories = ArticleCategory::where('parent' , 0)->get();
        return view('admin.article_category.all', compact('articleCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required',
            'parent' => 'required',
            'slug' => 'required|unique:article_categories',
        ]);
        ArticleCategory::create($validData);
        return back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArticleCategory $articleCategory)
    {
        return view('admin.article.edit', compact('articleCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArticleCategory $articleCategory)
    {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'body' => 'required',
            'slug' => ['required', Rule::unique('articles', 'slug')->ignore($articleCategory->id)],
        ]);
        $articleCategory->update($validData);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArticleCategory $articleCategory)
    {
        $articleCategory->delete();
        return back();
    }
}
