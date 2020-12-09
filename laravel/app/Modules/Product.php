<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'description', 'price', 'category_id', 'active'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo('App\Modules\Category');
    }

    public function image()
    {
        return $this->morphOne('App\Modules\Image', 'imageable')->where('category', 'image');
    }

}
