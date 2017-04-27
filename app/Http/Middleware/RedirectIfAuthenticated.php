<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
    	$message = "(DEBUG!)" . __FILE__ . "---->" . __FUNCTION__ . ":" . __LINE__;
    	//$message .= "\n\r" . var_export($request,true);
    	$message .= "\n\r" . var_export($next,true);
    	logger($message);
    	logger(Auth::guard($guard)->check());
    	 
        if (Auth::guard($guard)->check()) {
	    	$message = "(DEBUG!)" . __FILE__ . "---->" . __FUNCTION__ . ":" . __LINE__;
	    	logger($message);
        	//return redirect('/tool');
        	return $next($request);
        }

        return $next($request);
        //return redirect('/tool');
    }
    
    
    
}
