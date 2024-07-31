<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $roles = explode("|", $role);
        $userRole = $request->user()->role->name;

        foreach ($roles as $rolea) {
            if ($userRole === $rolea) {
                return $next($request);
            }
        }
        abort(404);
    }
}
