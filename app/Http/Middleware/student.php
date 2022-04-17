<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class student
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
        if (Auth::user()->role == 'student') {
            return $next($request);
        } else {
            return redirect('/', 302);
        }
    }
}
