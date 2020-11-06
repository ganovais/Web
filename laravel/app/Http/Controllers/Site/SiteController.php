<?php

namespace App\Http\Controllers\Site;

use App\Modules\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.home.index');
    }

    public function products()
    {
        return view('site.products.index');
    }

    public function contact()
    {
        $config = Config::all()->pluck('value', 'key')->toArray();
        // dd($config);
        return view('site.contact.index', compact('config'));
    }

    public function detail($slug)
    {
        // info($slug);
        // dd($slug);
        return view('site.products.detail.index');
    }

    public function login()
    {
        return view('site.auth.login');
    }

    public function wishlist()
    {
        return view('site.wishlist.index');
    }
}
