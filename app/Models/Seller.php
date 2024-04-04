<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = ['phone_number', 'active', 'token', 'status'];


    public function sellerVerifyCodes()
    {
        return $this->hasMany(SellerVerifyCode::class);
    }

    public function sellerInfo()
    {
        return $this->hasOne(SellerInfo::class);
    }

    public function sellerAdresses()
    {
        return $this->hasMany(SellerAddress::class);
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
