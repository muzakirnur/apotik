<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GudangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role != "2") {
            /* 
            silahkan modifikasi pada bagian ini
            apa yang ingin kamu lakukan jika rolenya tidak sesuai
            */
            return redirect()->to('/home');
        }
        return $next($request);
    }
}
