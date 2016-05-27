<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdministrator
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
        /*$user = $request -> user();
        if ($user && $user->role === "Admin") {
            return $next($request);
        }*/
        //return $next($request);
        return redirect()->guest('login');
        //abort(404, 'Only Admins can register new users.');
        
    }
}
