<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function indexView(){
        return view('user_profile.index');
    }
    public function commentsView(){
        return view('user_profile.comments');
    }
    public function identifyView(){
        return view('user_profile.identity_confirmation');
    }
    public function infoView(){
        return view('user_profile.info');
    }
    public function messageView(){
        return view('user_profile.message');
    }
    public function ordersView(){
        return view('user_profile.orders_history');
    }
    public function wishListView(){
        return view('user_profile.wish_list');
    }
    public function addressView(){
        return view('user_profile.address');
    }

}
