<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         // return redirect(RouteServiceProvider::HOME);
        //         if (Gate::allows('isAdmin')) {
        //             // return redirect()->route('admin.dashboard');
        //             return redirect('/admin/');
        //         } else if (Gate::allows('isDonatur')) {
        //             // return redirect()->route('donatur.dashboard');
        //             return redirect('/donatur/');
        //         }
        //     }
        // }

        if (Gate::allows('isAdmin')) {
            // return redirect()->route('admin.dashboard');
            return redirect('/admin/');
        } else if (Gate::allows('isDonatur')) {
            // return redirect()->route('donatur.dashboard');
            return redirect('/donatur/');
        }

        return $next($request);
    }
}
