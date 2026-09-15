<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login dan role-nya adalah 'admin'
        if ($request->user() && $request->user()->role === 'admin') {
            return $next($request);
        }

        // Jika bukan admin, kembalikan ke dashboard biasa dengan pesan error atau abort 403
        return redirect()->route('dashboard');
    }
}