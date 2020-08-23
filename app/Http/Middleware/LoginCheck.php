<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Http\Requests;
use App\User;
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

        $roleUser = Auth::User()->role->pluck('name');

        //dd($roleUser);

        if($roleUser[0] == 'Superadmin' || $roleUser[0] == 'teacher'){

            return $next($request);
        }else{
            return redirect('/login');
        }
    }
}
