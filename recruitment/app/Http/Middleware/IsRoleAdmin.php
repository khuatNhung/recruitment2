<?php

namespace App\Http\Middleware;

use Closure;

class IsRoleAdmin
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
         if(!Auth::check() or $request->user()->user_type!='1') {
            return redirect('unauthorized');
        }
        return $next($request);
    }
}
