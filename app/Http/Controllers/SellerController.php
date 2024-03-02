<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\SellerInfo;
use App\Models\SellerVerifyCode;
use App\Notifications\SellerActiveCode;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    //view seller
    public function sign_in_view(Request $request)
    {
        return view('seller.sign_in');
    }

    public function sign_in_verify_otp_view()
    {
        if (!session('seller')) {
            return redirect(route('sign.in.view'));
        }
        return view('seller.verify_otp');
    }

    public function select_seller_status()
    {
        return view('seller.seller_registration_1');
    }

    public function seller_business_info()
    {
        $seller_info = $this->getSellerInfo();
        return view('seller.seller_registration_2', compact('seller_info'));
    }

    public function seller_address()
    {
        $seller_info = $this->getSellerInfo();
        return view('seller.seller_registration_3');
    }

    public function seller_questions()
    {
        return view('seller.seller_registration_4');
    }

    public function final_seller_panel_view()
    {
        return view('seller.seller_registration_5');
    }


    //logic seller

    public function send_sms_to_seller_user(Request $request)
    {
        $validData = $request->validate([
            'phone_number' => 'required|regex:/^[0][9][0-9]{9,9}$/'
        ]);


        $seller = Seller::where('phone_number', $validData['phone_number'])->first();

        if (!$seller) {

            $seller = Seller::create($validData);
            $seller_code = SellerVerifyCode::GenerateCode($seller);

            $seller->sellerVerifyCodes()->create([
                'expired_at' => now()->addRealMinutes(10),
                'code' => $seller_code,
                'is_used' => false,
            ]);

            //save user
            session(['seller' => $seller]);
            //TODO send sms
            return redirect('/seller/verify/otp');

        } else {
            $seller_code = SellerVerifyCode::GenerateCode($seller);

            $seller->sellerVerifyCodes()->update([
                'expired_at' => now()->addRealMinutes(10),
                'code' => $seller_code,
                'is_used' => false,
            ]);

            //save user
            session(['seller' => $seller]);

            //TODO send sms
            return redirect('/seller/verify/otp');
        }

    }

    public function sign_in_verify_otp_logic(Request $request)
    {
        $validData = $request->validate([
            'code' => 'required|numeric|digits:6'
        ]);

        if (!session('seller')) {
            return redirect(route('sign.in.view'));
        }

        $seller = session('seller');

        $status = SellerVerifyCode::VerifyCode($seller, $validData['code']);


        if ($status) {
            $seller->sellerVerifyCodes()->update([
                'is_used' => true,
            ]);
            session(['seller_phone' => $seller->phone_number]);
            if ($seller->active) {
                $seller->update(['verified_phone']);
                session(['seller_token' => $seller->token]);
                session()->forget('seller');
                //redirect to seller panel
                return redirect(route('seller.panel.index'));
            } else {
                return redirect(route('select.seller.status'));
            }
        } else {
            return redirect()->back()->withErrors(['msg' => 'کد وارد شده معتبر نیست']);
        }

    }

    private function getSellerInfo()
    {
        if (session()->has('seller')) {
            $seller = session('seller');
            $seller_info = SellerInfo::where('seller_id', $seller['id'])->first();
            if ($seller_info) {
                return $seller_info;
            }
        }
        return null;
    }
}
