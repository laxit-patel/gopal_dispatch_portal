<?php

namespace App\Http\Middleware;

use App\Helpers\OpeningHours;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class IsUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!OpeningHours::check()){
            Auth::logout();
            return redirect()->route('closed');
        } //only fires when time is not between opening and closing | logs out current user

        if(!auth()->check() || auth()->user()->is_admin)
        {
            abort('403');
        }
        return $next($request);
    }
}
