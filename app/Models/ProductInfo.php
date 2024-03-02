<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    use HasFactory;

    protected $fillable = ['product_id' , 'attr_value_id', 'attr_id', 'price', 'quantity' ,'dimensions' ,'seller_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
