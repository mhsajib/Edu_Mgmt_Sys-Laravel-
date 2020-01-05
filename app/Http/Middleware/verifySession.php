<?php

namespace App\Http\Middleware;

use Closure;

class verifySession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     return $next($request);
    // }

      public function handle($request, Closure $next)
    {
        if($request->session()->has('uname')){
            return $next($request);
        }else{
            return redirect()->route('login.index');
        }
    }
}
