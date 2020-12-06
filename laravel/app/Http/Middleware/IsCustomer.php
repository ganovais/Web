<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class IsCustomer 
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if(Auth::check()) {
            if(Auth::user()->is_customer) {
                return redirect('painel');
            }
        } else {
            return redirect('login');
        }

        return $response;
    }
}