<?php

namespace App\Http\Middleware;

use Closure;

class isStatusAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && $request->user()->status == 'User') {
        return redirect()->guest('/login');

        }   
        return $next($request);  
    }
}

