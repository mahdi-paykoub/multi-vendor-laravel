<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Notification;
use App\Models\Product;
use App\Models\UserInfo;
use App\Models\WishList;
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
        $loginDate = auth()->user()->created_at->format('Y-m-d');

        $notifications = Notification::whereDate('created_at', '>=', $loginDate)->get();

        return view('user_profile.message', compact('notifications'));
    }

    public function ordersView()
    {
        return view('user_profile.orders_history');
    }

    public function wishListView()
    {
        $liked_posts = Like::where('user_id', auth()->user()->id)->get();

        $products = [];
        foreach ($liked_posts as $liked_post) {
            $products[] = Product::where('id', $liked_post->product_id)->first();
        }

        $wishLists = auth()->user()->wishLists()->get();
        return view('user_profile.wish_list', compact('products', 'wishLists'));
    }

    public function addressView()
    {
        $user_addresses = auth()->user()->addresses()->get();
        return view('user_profile.address', compact('user_addresses'));
    }
    public function getNotificationDetail(Notification $notification)
    {
        return view('user_profile.notofication_datail', compact('notification'));
    }
    public function wishListDetailView(WishList $wishList)
    {
        $products = $wishList->products()->get();
        return view('user_profile.wishList_detail', compact('wishList', 'products'));
    }
}
