<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'price',
        'status',
        'tracking_serial',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function productInfos()
    {
        return $this->belongsToMany(ProductInfo::class);
    }
}
