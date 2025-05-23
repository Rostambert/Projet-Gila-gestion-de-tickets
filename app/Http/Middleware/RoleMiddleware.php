<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur est authentifié et possède un rôle valide
        if (!$user || !in_array($user->role, $roles)) {
            return redirect('/')->with('error', 'Accès refusé.');
        }

        return $next($request);
    }
}
