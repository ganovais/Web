<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    // use SoftDeletes;

    protected $fillable = [
        'path', 'imageable_id', 'imageable_type', 'category'
    ];

    public function imageable()
    {
        return $this->morphTo();
    }

}
