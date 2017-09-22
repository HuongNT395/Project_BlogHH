<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdmiLoginMiddleware
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
        if(Auth::check()){

            $user = Auth::user();
            if($user->active == 1)
                return $next($request);
            else
                return redirect('/post/logged/list');
        }
        else
            return redirect('/login');
    }
}
