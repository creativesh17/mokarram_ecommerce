<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if(Auth::check() && Auth::user()->role_id == 2 && Auth::user()->status == 1){
            return $next($request);
        }else{
            return redirect('/profile')->with('warning','you have no permission.');
        }
        //
        // dd('this is super admin.');
    }
}
