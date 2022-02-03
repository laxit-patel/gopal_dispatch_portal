<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TimeOutMiddleware
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
        $timeout = DB::table('timeout')->where('user',Auth()->id())->first(); //get expired_at

        $date = Carbon::parse($timeout->expires_at);
        $now = Carbon::now();

        $diff = $date->diff($now)->format('%h:%i:%s'); //get difference in HH:MM:SS

        view()->share('timeout', $diff); //share to all views

        return $next($request);
    }
}
