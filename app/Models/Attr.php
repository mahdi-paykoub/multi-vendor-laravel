<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'is_variable'];


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function productAttributeValues()
    {
        return $this->hasMany(AttrValue::class);
    }
    public function productInfo()
    {
        return $this->belongsTo(ProductInfo::class);
    }
}
