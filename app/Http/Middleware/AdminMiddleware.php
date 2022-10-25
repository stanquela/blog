<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //imported for auth purpose

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            //checking if user is admin
            if(Auth::user()->role == 1){
                    return $next($request);
               } else {
                    return redirect('/blog')->with('message', 'ACCESS DENIED! You are not logged in as ADMIN!');      
            }
        } else {
             return redirect('/login')->with('message', 'Please login in order to access!');   
        }        
        return $next($request);
    }
}
