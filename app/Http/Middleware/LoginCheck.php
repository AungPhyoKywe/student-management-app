<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Gate;
class LoginCheck
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

        if (Gate::allows('admin', auth()->user()) || Gate::allows('teacher', auth()->user())) {

           return $next($request);

        }else{
            return redirect()->back();
        }
 
        
    }
}
