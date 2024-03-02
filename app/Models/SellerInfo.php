<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'national_code',
        'shop_status',
        'shop_code',
        'shop_name',
        'about_shop',
        'shop_number',
        'shop_website',
        'shop_logo',
        'shop_closed_days',
        'seller_id',
        ];

    public function Seller(){
        return $this->belongsTo(Seller::class);
    }
}
