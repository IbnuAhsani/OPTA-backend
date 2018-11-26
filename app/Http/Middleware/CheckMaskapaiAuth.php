<?php

namespace App\Http\Middleware;

use Closure;

class CheckMaskapaiAuth
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
        if(session("user") == null) {
            return redirect()->route('home');
        } 

        return $next($request);
        // return session("user")["id"] !== 0 ? redirect("/") : $next($request);
    }
}
