<?php

namespace App\Http\Controllers\PaymentMethods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentMethodController extends Controller
{
    
    public function list()
    {
        return view('system.payment-method.list');
    }

    public function create($id = null)
    {
        return view('system.payment-method.create');
    }
}
