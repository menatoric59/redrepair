<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Styde\Html\Facades\Alert;

class UserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param expected $role
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        $type = Auth::user()->type;
        if ( $type != $role && $type != 'superadmin' ){
            Alert::danger('Tienes un tipo de usuario ' . strtoupper($type) .' el cual NO tiene permiso en esta ruta.' );
            return redirect()->route('dashboard');
        }
        return $next($request);

    }
}
