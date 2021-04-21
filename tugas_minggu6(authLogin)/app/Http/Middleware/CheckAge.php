<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class CheckAge
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
        if (Auth::user()->role != "admin"){
            return redirect()->route('error');
        }
        return $next($request);
    }
}

// class CheckAge{
//      public function handle($request, Closure $next){
//         //  $datauser = users::where('client', $request->client)

//          if (Auth::user()->role != 1) {
//             return redirect()->route('home');
//          }
//          return $next($request);
//      }
// }