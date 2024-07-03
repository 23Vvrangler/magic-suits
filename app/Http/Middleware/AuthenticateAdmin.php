<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; // <--- Importar la clase Request

class AuthenticateAdmin
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
        // Verificar si el usuario está autenticado como administrador
        if (!Auth::guard('admin')->check()) {
            // Si no está autenticado, redirigir al usuario a la ruta de login de administradores
            return redirect()->route('admin.login');
        }
        
        // Si está autenticado, permitir que la solicitud continúe
        return $next($request);
    }
}