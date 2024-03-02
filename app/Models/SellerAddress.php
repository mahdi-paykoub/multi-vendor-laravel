<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_address',
        'shop_city',
        'shop_state',
        'plaque',
        'postal_code',
        'seller_id'
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }


}
