<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        if ($request->age<=200){
            return redirect('home');
        }
        return $next($request);
    }
}

class CheckRole{
     public function handle($request, Closure $next, $role){
         if (!$request->user()->hasrole($role)) {
            //return redirect('');
         }
         return $next($request);
     }
}

class StartSession{
    public function handle($request, Closure $next, $role){
        if (!$request->user()->hasrole($role)) {
           //return redirect('');
        }
        return $next($request);
    }

    public function terminate($request, $response){
        //
    }
}