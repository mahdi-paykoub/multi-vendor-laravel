<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use App\Models\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function addWishList(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        auth()->user()->wishLists()->create($validData);
        return back();
    }
    public function deleteWishList(WishList $wishList)
    {
        $wishList->delete();
        return redirect(route('lists.profile'));
    }
}
