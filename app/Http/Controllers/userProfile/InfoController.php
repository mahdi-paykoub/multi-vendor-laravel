<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function name_update(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required',
        ]);
        Auth::user()->update($validData);
        return back();

    }

    public function national_code_update(Request $request)
    {
        $validData = $request->validate([
            'national_code' => 'required|regex:/^[0-9]{10}$/|digits:10',
        ]);
        UserInfo::updateOrCreate(
            ['user_id' => auth()->user()->id],
            ['national_code' => $validData['national_code']]
        );
        return back();
    }

    public function email_update(Request $request)
    {
        $validData = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);
        auth()->user()->update($validData);
        return back();
    }

    public function phone_number_update(Request $request)
    {
        $validData = $request->validate([
            'phone_number' => 'required|regex:/^[0][9][0-9]{9,9}$/|unique:user_infos'
        ]);
        UserInfo::updateOrCreate(
            ['user_id' => auth()->user()->id],
            ['phone_number' => $validData['phone_number']]
        );
        return back();
    }
}
