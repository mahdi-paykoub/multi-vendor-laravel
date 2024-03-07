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

    public function registerProductComment(Request $request)
    {

        $validData = $request->validate([
            'comment' => 'required',
            'commentable_type' => 'required',
            'commentable_id' => 'required',
            'parent_id' => 'required',

            'title' => 'required',
            'rate' => 'required',
        ]);

        $points = [
            'positive_points' => json_encode($request['positive_points']),
            'negative_points' => json_encode($request['negative_points']),
        ];

        $final_value = array_merge($points, $validData);
        auth()->user()->comments()->create($final_value);
        return back();
    }
}
