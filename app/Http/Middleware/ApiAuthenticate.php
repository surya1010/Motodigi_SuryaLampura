<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ApiAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd(auth()->guard('myApi'));
        $auth = auth()->guard('myApi');
 
        if ($auth->check()) {
            return $next($request);
        };
     
        abort(403, "You're not authorized to access this public REST API.");
    }
}
