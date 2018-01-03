<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoleGerenteRRHH
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
        if($request->user()){
            if($request->user()->tipo=='Gerente de RRHH') {
                return $next($request);
            }
            else{
                return redirect('/');
            }
        }
        return redirect('/');
    }
}
