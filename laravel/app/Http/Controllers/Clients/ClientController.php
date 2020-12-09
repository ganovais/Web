<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ClientController extends Controller 
{
    public function __construct(User $user_model)
    {
        $this->user_model = $user_model;
    }

    public function index()
    {
        $clients = $this->user_model->where('is_customer', 1)->get();

        return view('system.clients.list', compact('clients'));
    }

    public function edit()
    {
        return view('system.clients.create');
    }

    public function show($id)
    {
        return response()->json([
            'error' => false,
            'client' => $this->user_model->findOrFail($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'error' => false,
            'client' => $this->user_model->findOrFail($id)->update([
                'name' => $request['name'],
                'email' => $request['email'],
            ]),
            'message' => 'Cliente alterado com sucesso'
        ]);
    }

    public function destroy($id)
    {
        $this->user_model->findOrFail($id)->delete();
        return response()->json([
            'error' => false,
            'message' => 'Excluido com sucesso'
        ]);
    }
}