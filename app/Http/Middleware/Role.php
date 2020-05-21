<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Role
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
        // if (Auth::check() && Auth::user()->role == 'student') {
        //     return redirect('/students' . "/" . auth()->user()->id);
        // } elseif (Auth::check() && Auth::user()->role == 'teacher') {
        //     return redirect('/teachers' . "/" . auth()->user()->id);            
        // }
        return $next($request);
        
    }
}
