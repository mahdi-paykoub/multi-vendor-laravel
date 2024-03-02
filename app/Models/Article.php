<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'body', 'image', 'slug', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class , 'commentable');
    }

    public function articleCategories(){
        return $this->belongsToMany(ArticleCategory::class);
    }
}
