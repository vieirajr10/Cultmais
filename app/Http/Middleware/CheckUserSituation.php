<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserSituation
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user(); // Obtém o usuário autenticado

        if ($user && ($user->situation == 1 || $user->situation == 2)) {
            return $next($request); // Permita o acesso à rota se a situação for 1 ou 2
        }

        abort(403, 'Acesso não autorizado.'); // Caso contrário, negue o acesso com um erro 403
    }
}

