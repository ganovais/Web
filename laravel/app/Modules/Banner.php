<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'description'
    ];

    public function image()
    {
        // return $this->morphMany('')
        return $this->morphOne('App\Modules\Image', 'imageable')->where('category', 'image');
    }
}