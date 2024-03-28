<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttrValue extends Model
{
    use HasFactory;
    protected $fillable = ['value', 'attribute_id'];

    public function productAttribute()
    {
        return $this->belongsTo(Attr::class);
    }
    public function productInfo()
    {
        return $this->belongsTo(ProductInfo::class);
    }
}
