<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAge
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
        // $age = Auth::user()->age;
        if ($request->age > 15 ){

            return $next($request);

        }else{
            return "this page not allowed for you";
        }
    }
}
