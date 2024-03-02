<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function registerComment(Request $request)
    {
        $validData = $request->validate([
            'comment' => 'required',
            'commentable_type' => 'required',
            'commentable_id' => 'required',
            'parent_id' => 'required',
        ]);
        auth()->user()->comments()->create($validData);
        return back();
    }
}
