<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalOptions extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value','ref_id'];

}
