<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function indexView()
    {
        return view('user_profile.index');
    }

    public function commentsView()
    {
        $user_comments = auth()->user()->comments()->where('commentable_type', Product::class)->get();
        return view('user_profile.comments', compact('user_comments'));
    }

    public function identifyView()
    {
        return view('user_profile.identity_confirmation');
    }

    public function infoView()
    {
        $userInfo = UserInfo::where('user_id', auth()->user()->id)->first();
        return view('user_profile.info', compact('userInfo'));
    }

    public function messageView()
    {
        return view('user_profile.message');
    }

    public function ordersView()
    {
        return view('user_profile.orders_history');
    }

    public function wishListView()
    {
        return view('user_profile.wish_list');
    }

    public function addressView()
    {
        return view('user_profile.address');
    }

}
