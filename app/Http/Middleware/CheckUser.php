<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUser
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
        if (!session()->has('LoggedUser')) {;
            return redirect()->route('login');
        }

        if (session()->has('LoggedUser') && ($request->path() == 'auth/login' || $request->path() == 'auth/register')) {
            return back();
        }
        return $next($request);
    }
}
