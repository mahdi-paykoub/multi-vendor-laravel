<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'attr_value_id', 'attr_id', 'price', 'quantity', 'dimensions', 'seller_id' , 'confirmed_parts'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    public function attr()
    {
        return $this->belongsTo(Attr::class);
    }
    public function attr_value()
    {
        return $this->belongsTo(AttrValue::class);
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
