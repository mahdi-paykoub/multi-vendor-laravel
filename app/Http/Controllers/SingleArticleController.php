<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SingleArticleController extends Controller
{
    public function showSingleBlog(Article $article){
        return view('blog.singleArticle' ,compact('article'));
    }

    public function showHomeBlog(){
        $lastArticle = Article::latest()->first();
        $foreArticles = Article::orderBy('id', 'DESC')->skip(1)->take(4)->get();
        return view('blog.home' , compact('foreArticles','lastArticle'));
    }
}
