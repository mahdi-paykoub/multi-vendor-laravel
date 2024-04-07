<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'link', 'seller_id'];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
