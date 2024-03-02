<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->get();
        return view('admin.article.all', compact('articles'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
            'image' => 'required',
            'slug' => 'required|unique:articles',
            'categories' => 'required'
        ]);

        $article = auth()->user()->articles()->create($validData);
        $article->articleCategories()->sync($validData['categories']);
        /*Article::create($validData);*/
        return back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'body' => 'required',
            'slug' => ['required', Rule::unique('articles', 'slug')->ignore($article->id)],
        ]);
        $article->update($validData);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return back();
    }

    public function uploadArticleCKEditor(Request $request)
    {
        if ($request->hasFile('upload')) {

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('assets/admin/articleCKMedia'), $fileName);

            $url = asset('assets/admin/articleCKMedia/' . $fileName);
            return response()->json(['filename' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
