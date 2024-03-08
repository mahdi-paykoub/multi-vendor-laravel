<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function setUserAddress(Request $request)
    {
        $validData = $request->validate([
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required|digits:10',
            'plaque' => 'required',
        ]);

        $final_value = array_merge(
            [
                'addressable_id' => auth()->user()->id,
                'addressable_type' => User::class,
            ],
            $validData
        );
        Address::create($final_value);
        return response(['status' => true]);

    }
}
