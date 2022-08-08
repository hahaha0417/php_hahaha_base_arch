<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class test
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
        // https://learnku.com/docs/laravel/9.x/middleware/12210
        $rrr = 0;

        return $next($request);

    }
}
