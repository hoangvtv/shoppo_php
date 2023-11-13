<?php

namespace App\Http\Middleware;

use Closure;

class IsUserVerifyEmail
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
        if(!Auth::guard('guest')->user()->email_verified){
            Auth::guard('guest')->logout();
            return redirect()->route('user.login')->with('fail','You need to confirm your account, please check your email')->withInput();
        }
        return $next($request);
    }
}
