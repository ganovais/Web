<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\User;

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
}