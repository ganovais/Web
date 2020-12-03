<?php

namespace App\Http\Controllers\System;

use App\Services\ProductService;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{
    public function __construct(ProductService $product_service)
    {
        $this->product_service = $product_service;
    }

    public function dashboard()
    {
        $product_qtde = $this->product_service->model->get()->count();
        
        return view('system.dashboard.index', compact('product_qtde'));
    }

}
