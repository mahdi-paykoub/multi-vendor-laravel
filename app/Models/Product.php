<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pishran\LaravelPersianSlug\HasPersianSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory;
    use HasPersianSlug;

    protected $fillable = ['title', 'description', 'image', 'brand_id', 'dimensions', 'originality', 'status'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function productAttributes()
    {
        return $this->belongsToMany(Attr::class)->using(ProductAttrValuePivot::class)->withPivot(['attr_value_id']);
    }

    public function productInfos()
    {
        return $this->hasMany(ProductInfo::class);
    }


    public function productCategories()
    {
        return $this->belongsToMany(ProductCategory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
    public function wishLists()
    {
        return $this->belongsToMany(WishList::class);
    }
}
