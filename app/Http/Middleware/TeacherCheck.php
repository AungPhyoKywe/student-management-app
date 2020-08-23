<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
class TeacherCheck
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

        if($roleUser[0] == 'teacher' || $roleUser[0] == 'Superadmin'){

            return $next($request);
        }else{
            return redirect('/login');
        }

    }
}
