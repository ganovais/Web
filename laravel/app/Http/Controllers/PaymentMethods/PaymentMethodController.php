<?php

namespace App\Http\Controllers\PaymentMethods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Requests\PaymentMethodRequest;
use App\Services\PaymentMethodService;

class PaymentMethodController extends Controller
{
    public function __construct(PaymentMethodService $payment_method_service) {
        $this->payment_method_service = $payment_method_service;
    }
    
    public function index()
    {
        return view('system.payment-method.list');
    }

    public function create()
    {
        return view('system.payment-method.create');
    }

    public function store(PaymentMethodRequest $request)
    {
        return response()->json([
            'error' => false,
            'payment-method' => $this->payment_method_service->store($request->toArray()),
            'message' => 'Cadastrado com sucesso',
        ], 200);
    }
}
