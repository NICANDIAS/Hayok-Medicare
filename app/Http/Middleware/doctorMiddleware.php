<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class doctorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        $user = $request->user();
        if ($user && ($user->cadre == 'Doctor')) {
            return $next($request);
        }else return new Response(view('unauthorized')->with('role', 'Doctor'));
    }
}
