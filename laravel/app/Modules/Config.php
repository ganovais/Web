<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Config extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'key', 'value'
    ];

}
