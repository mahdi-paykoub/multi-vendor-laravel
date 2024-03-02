<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'title', 'parent'];

    public function child()
    {
        return $this->hasMany(ProductCategory::class, 'parent', 'id');
    }


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
