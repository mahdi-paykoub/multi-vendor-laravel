<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerVerifyCode extends Model
{
    protected $fillable = ['seller_id', 'code', 'expired_at' , 'is_used'];
    use HasFactory;

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }


    public function scopeGenerateCode($query, $seller)
    {
        do {
            $code = mt_rand(100000, 999999);
        } while ($this->checkCodeIsUnique($seller, $code));

        return $code;
    }

    private function checkCodeIsUnique($seller, int $code)
    {
        return !!$seller->sellerVerifyCodes()->whereCode($code)->first();
    }


    public function scopeVerifyCode($query, $seller, $code)
    {
        return !!$seller->sellerVerifyCodes()->whereCode($code)->where('expired_at', '>', now())->where('is_used' , false)->first();
    }


}
