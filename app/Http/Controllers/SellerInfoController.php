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
}
