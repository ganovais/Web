<?php

namespace App\Services;

use App\Modules\Config;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ConfigService
{
    public function __construct(Config $model)
    {
        $this->model = $model;
    }

    public static function get($key = null)
    {
        if (empty($key)) {
            return Config::all()->pluck('value', 'key')->toArray();
        } else if (is_array($key)) {
            return Config::whereIn('key', $key)->pluck('value', 'key')->toArray();
        } else {
            return Config::where('key', $key)->first()->value ?? null;
        }
    }

}
