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
        $payment_methods = $this->payment_method_service->model->get();
        return view('system.payment-method.list', compact('payment_methods'));
    }

    public function create()
    {
        return view('system.payment-method.create');
    }

    public function edit()
    {
        return view('system.payment-method.create');
    }

    public function show($id)
    {
        return response()->json([
            'error' => false,
            'payment_method' => $this->payment_method_service->model->findOrFail($id),
        ], 200);
    }

    public function store(PaymentMethodRequest $request)
    {
        return response()->json([
            'error' => false,
            'payment_method' => $this->payment_method_service->store($request->toArray()),
            'message' => 'Cadastrado com sucesso',
        ], 200);
    }


    public function update(PaymentMethodRequest $request, $id)
    {
        return response()->json([
            'error' => false,
            'payment_method' => $this->payment_method_service->update($request->toArray(), $id),
            'message' => 'Editado com sucesso',
        ], 200);
    }

    public function destroy($id)
    {
        return response()->json([
            'error' => false,
            'deleted' => $this->payment_method_service->destroy($id),
            'message' => 'Deletado com sucesso',
        ], 200);
    }
}
