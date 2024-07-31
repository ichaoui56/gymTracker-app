<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Abonnement
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $abonnement)
    {
        $abonnements = explode("|", $abonnement);
        $userAbonnement = $request->user()->abonnement->plan->name; 
        
        foreach ($abonnements as $sub) {
            if ($userAbonnement === $sub) {
                return $next($request);
            }
        }
        abort(403);
    }
}
