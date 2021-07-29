<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard == 'admin')->check()) {
            return redirect('/admin');
        } else if (Auth::guard($guard == 'puslaba')->check()) {
            return redirect('/puslaba');
        } else if (Auth::guard($guard == 'pusjian')->check()) {
            return redirect('/pusjian');
        } else if (Auth::guard($guard == 'pbb')->check()) {
            return redirect('/pbb');
        } else if (Auth::guard($guard == 'p2m2')->check()) {
            return redirect('/p2m2');
        }
        return $next($request);
    }
}
