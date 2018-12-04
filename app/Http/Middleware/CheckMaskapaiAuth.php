<?php

namespace App\Http\Middleware;

use Closure;
use App\Repo\Role;

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
        if(!session("maskapai")) {
            return redirect()->route('root');
        } 

        return  $next($request);
    }
}
