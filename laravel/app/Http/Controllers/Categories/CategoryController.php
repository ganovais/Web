<?php

namespace App\Http\Controllers\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    
    public function index()
    {
        return view('system.categories.list');
    }

    public function create()
    {
        return view('system.categories.create');
    }
}
