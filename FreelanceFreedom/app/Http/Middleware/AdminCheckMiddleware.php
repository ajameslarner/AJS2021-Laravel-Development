<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class AdminCheckMiddleware
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
        //Failsafe for any un-authorised guests
        if (!auth()->user()) {
            abort(403);
        }

        //Check is the logged in user is a user
        if (auth()->user()->user_role == 'User') {
            abort(403);
        }

        //if not, and used is "Admin", return request
        return $next($request);
    }
}
