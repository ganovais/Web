<?php

namespace App\Http\Controllers\Status;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    
    public function index()
    {
        return view('system.status.list');
    }

    public function create()
    {
        return view('system.status.create');
    }
}
