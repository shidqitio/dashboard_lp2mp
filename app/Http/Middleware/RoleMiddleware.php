<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roleName)
    {
        if (!$request->user()->hasRole($roleName)) {
            if (Auth::user()->hasRole('admin')) {
                return redirect('/admin');
            }

            if (Auth::user()->hasRole('puslaba')) {
                return redirect('/puslaba');
            }

            if (Auth::user()->hasRole('pusjian')) {
                return redirect('/pusjian');
            }

            if (Auth::user()->hasRole('pbb')) {
                return redirect('/pbb');
            }

            if (Auth::user()->hasRole('p2m2')) {
                return redirect('/p2m2');
            }
        }
        return $next($request);
    }
}
