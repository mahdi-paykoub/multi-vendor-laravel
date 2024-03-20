<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use App\Models\Product;
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
    public function addProductToWishList(Request $request)
    {

        if (!isset($request['productId'])) {
            return response(['status' => false, 'msg' => 'اشکال در ارتباط']);
        }

        Product::find($request['productId'])->wishLists()->sync($request['wish_list_ids']);
        return response(['status' => true, 'msg' => 'عملیات با موفقیت انجام شد.']);
    }
}
