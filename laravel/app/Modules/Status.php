<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use SoftDeletes;

    protected $table = 'status';

    protected $fillable = [
        'name', 'color'
    ];

}
