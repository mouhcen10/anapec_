<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsProf
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
        
        if(auth()->user()->is_prof == 1){
            return $next($request);
        }
   
        return redirect('/')->with('error',"Your email or password wrong !.");
    }
}