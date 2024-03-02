<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function national_code_update(Request $request){

    }
    public function phone_number_update(Request $request){

    }
    public function birthday_update(Request $request){

    }
    public function email_update(Request $request){

    }
    public function job_update(Request $request){

    }
    public function name_update(Request $request){
        $validData = $request->validate([
            'name' => 'required',
        ]);
        Auth::user()->update($validData);
        return back();

    }
}
