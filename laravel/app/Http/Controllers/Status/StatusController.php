<?php

namespace App\Http\Controllers\Status;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\StatusService;
use App\Requests\StatusRequest;

class StatusController extends Controller
{
    
    public function __construct(StatusService $status_service) {
        $this->status_service = $status_service;
    }

    public function index()
    {
        $status = $this->status_service->model->get();
        return view('system.status.list', compact('status'));
    }

    public function create()
    {
        return view('system.status.create');
    }

    public function edit()
    {
        return view('system.status.create');
    }

    public function show($id)
    {
        return response()->json([
            'error' => false,
            'status' => $this->status_service->model->findOrFail($id),
        ], 200);
    }

    public function store(StatusRequest $request)
    {
        return response()->json([
            'error' => false,
            'status' => $this->status_service->store($request->toArray()),
            'message' => 'Cadastrado com sucesso',
        ], 200);
    }


    public function update(StatusRequest $request, $id)
    {
        return response()->json([
            'error' => false,
            'status' => $this->status_service->update($request->toArray(), $id),
            'message' => 'Editado com sucesso',
        ], 200);
    }

    public function destroy($id)
    {
        return response()->json([
            'error' => false,
            'deleted' => $this->status_service->destroy($id),
            'message' => 'Deletado com sucesso',
        ], 200);
    }
}
