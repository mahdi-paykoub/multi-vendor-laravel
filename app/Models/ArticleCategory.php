<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'parent', 'slug'];

    public function articles(){
        return $this->belongsToMany(Article::class);
    }

    public function child(){
        return $this->hasMany(ArticleCategory::class , 'parent' , 'id');
    }
}
