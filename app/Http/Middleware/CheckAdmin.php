<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class CheckAdmin
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
        if(Auth::user()){
            if(Auth::user()->usuRol !== 1 && Auth::user()->usuRol !== 2){
                if(url()->previous() !== $request->url()){
                    return redirect(url()->previous());
                }else{
                    return redirect('home');
                }
            };
        }else{
            return redirect('home');
        }
        return $next($request);
    }
}
