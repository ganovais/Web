<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dados extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'phone', 'accepted'
    ];

    public function feedbacks()
    {
        return $this->hasMany('App\Modules\Feedback', 'dado_id');
    }
}