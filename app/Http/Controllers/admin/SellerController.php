<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\SellerInfo;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers = Seller::orderBy('id', 'DESC')->get();
        return view('admin.seller.all', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Seller $seller)
    {
        return view('admin.seller.details', compact('seller'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seller $seller)
    {
        //
    }

    public function setSellerStatus(Request $request, Seller $seller)
    {
        $validData = $request->validate([
            'status' => 'required',
        ]);

        $seller->update($validData);
        return back();
    }
    public function change_sellerInfo_status(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required',
            'seller_id' => 'required',
        ]);

        $sellerInfo = SellerInfo::where('seller_id', $validData['seller_id']);

        $confirmed_parts =  ($sellerInfo->first()->confirmed_parts) == null ? collect([]) : collect(json_decode($sellerInfo->first()->confirmed_parts));


        if ($confirmed_parts->contains($validData['name'])) {


            $confirmed_parts = $confirmed_parts->filter(function ($item) use ($validData) {
                return $item != $validData['name'];
            });

            SellerInfo::where('seller_id', $validData['seller_id'])->update([
                'confirmed_parts' => json_encode($confirmed_parts->values())
            ]);

            return response(['status' => 'removed']);
        } else {
            $confirmed_parts->push($validData['name']);
            SellerInfo::where('seller_id', $validData['seller_id'])->update([
                'confirmed_parts' => json_encode($confirmed_parts)
            ]);

            return response(['status' => 'added']);
        }
    }
}
