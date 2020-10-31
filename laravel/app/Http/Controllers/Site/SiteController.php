<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('site.contact.index');
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
