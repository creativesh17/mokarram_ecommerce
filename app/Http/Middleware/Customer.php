<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Customer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next) {
    //     if(Auth::user()->user_role_id == 3) {
    //         return $next($request);
    //     }else {
    //         return back();
    //     }
    //     return $next($request);
    // }
    public function handle($request, Closure $next) {
        if(Auth::check() && Auth::user()->user_role_id == 3) {
            return $next($request);
        }
        return back();
    }
}
