<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        // if (auth()->user()->isAdmin()){
        //     return $next($request);
        // }

        if (!auth()->check() || !$request->user()->isAdmin()) {
            return redirect('/')->with('error', 'U heeft geen admin rechten');
        }


        return $next($request);

    }
}
