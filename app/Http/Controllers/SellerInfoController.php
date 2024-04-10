<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\SellerAddress;
use App\Models\SellerInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SellerInfoController extends Controller
{
    public function sellerSelectStatus(Request $request)
    {
        $validData = $request->validate([
            'shop_status' => 'required|in:personal,company',
        ]);


        $seller = session('seller');

        $validData = array_merge($validData, ['seller_id' => $seller['id']]);

        $seller_info = SellerInfo::where('seller_id', $seller['id'])->first();

        if ($seller_info) {
            $seller_info->update($validData);
        } else {
            SellerInfo::create($validData);
        }

        return redirect(route('seller.business.info'));
    }

    public function sellerBusinessInfo(Request $request)
    {
        $validData = $request->validate([
            'shop_name' => '',
            'cart_number' => 'required|digits:16|numeric',
            'national_code' => 'required|regex:/^[0-9]{10}$/|digits:10',
        ]);


        $seller = session('seller');

        SellerInfo::where('seller_id', $seller['id'])->update($validData);

        return redirect(route('seller.address'));
    }

    public function addSellerAddress(Request $request)
    {
        $validData = $request->validate([
            'shop_city' => 'required',
            'shop_state' => 'required',
            'shop_address' => 'required',
            'postal_code' => 'required|digits:10',
        ]);

        $seller = session('seller');


        $seller_address = SellerAddress::where('seller_id', $seller['id'])->first();

        if ($seller_address) {
            $seller_address->update($validData);
        } else {
            $seller->sellerAdresses()->create($validData);
        }


        return redirect(route('seller.questions'));
    }

    public function final_register_seller(Request $request)
    {
        $seller = session('seller');

        $token = Str::random(50);
        Seller::where('id', $seller['id'])->update(['active' => true, 'token' => $token]);
        session(['seller_token' => $token]);

        session()->forget('seller');

        //redirect to seller panel
        return redirect(route('seller.panel.index'));
    }

    // prodile
    public function register_seller_name(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required',
        ]);

        get_seller_by_token()->sellerInfo()->update([
            'name' => $validData['name']
        ]);


        return back();
    }
    public function register_seller_email(Request $request)
    {
        $validData = $request->validate([
            'email' => 'required',
        ]);

        get_seller_by_token()->sellerInfo()->update([
            'email' => $validData['email']
        ]);


        return back();
    }
    public function register_seller_nationalCode(Request $request)
    {
        $validData = $request->validate([
            'national_code' => 'required',
        ]);

        get_seller_by_token()->sellerInfo()->update([
            'national_code' => $validData['national_code']
        ]);


        return back();
    }






    public function register_store_name(Request $request)
    {
        $validData = $request->validate([
            'shop_name' => 'required',
        ]);

        get_seller_by_token()->sellerInfo()->update([
            'shop_name' => $validData['shop_name']
        ]);


        return back();
    }
    public function register_store_about(Request $request)
    {
        $validData = $request->validate([
            'shop_about' => 'required',
        ]);

        get_seller_by_token()->sellerInfo()->update([
            'about_shop' => $validData['shop_about']
        ]);


        return back();
    }
    public function register_store_fix_number(Request $request)
    {
        $validData = $request->validate([
            'shop_number' => 'required',
        ]);

        get_seller_by_token()->sellerInfo()->update([
            'shop_number' => $validData['shop_number']
        ]);


        return back();
    }
    public function register_store_website(Request $request)
    {
        $validData = $request->validate([
            'shop_website' => 'required',
        ]);

        get_seller_by_token()->sellerInfo()->update([
            'shop_website' => $validData['shop_website']
        ]);


        return back();
    }
    public function register_store_logo(Request $request)
    {

        $validData = $request->validate([
            'file' => 'required',
        ]);

        /*add gallery img*/
        $file = $request->file('file');

        $destinationPath = '/assets/frontend/image/store-logo/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destinationPath), $file->getClientOriginalName());
        /*end add gallery img*/

        get_seller_by_token()->sellerInfo()->update([
            'shop_logo' => $destinationPath . $file->getClientOriginalName()
        ]);


        return response([]);
    }
    public function register_cart_number(Request $request)
    {
        $validData = $request->validate([
            'cart_number' => 'required',
        ]);

        get_seller_by_token()->sellerInfo()->update([
            'cart_number' => $validData['cart_number']
        ]);


        return back();
    }
    public function register_cart_name(Request $request)
    {
        $validData = $request->validate([
            'cart_name' => 'required',
        ]);

        get_seller_by_token()->sellerInfo()->update([
            'cart_name' => $validData['cart_name']
        ]);


        return back();
    }

    public function change_seller_status()
    {
        get_seller_by_token()->update([
            'status' => 'approvedQueue'
        ]);
        return back();
    }
}
