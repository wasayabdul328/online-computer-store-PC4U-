<?php

namespace App\Http\Middleware;

use Closure;

class CheckBanned
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
        if (auth()->check() && auth()->user()->isBan ) {
            
            auth()->logout();
                return redirect()->route('user.login')->with('message','Your account has been suspended. Please contact administrator.');        
            }

            return $next($request);
        }

        
    }


