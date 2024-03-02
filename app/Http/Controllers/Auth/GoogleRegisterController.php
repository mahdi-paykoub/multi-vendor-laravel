<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Psy\Util\Str;

class GoogleRegisterController extends Controller
{
    public function startGoogleRegister()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleBackUrlLogic()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email' , $googleUser->email)->first();

            if(! $user) {
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => bcrypt(\Illuminate\Support\Str::random(16)),
                ]);
            }

            if( ! $user->hasVerifiedEmail()) {
                $user->markEmailAsVerified();
            }

            auth()->loginUsingId($user->id);

            return redirect('/');
        } catch (\Exception $e) {
            return redirect('/login');
        }
    }
}
