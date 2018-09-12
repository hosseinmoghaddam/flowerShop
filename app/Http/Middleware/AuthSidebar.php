<?php

namespace App\Http\Middleware;

use Closure;

class AuthSidebar
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
        $first = collect(request()->segments())->first();
        if ($first == 'member' and ($request->user()->hasRole('member')))
            return $next($request);
        elseif ($first == 'admin' and ($request->user()->hasRole('admin')))
            return $next($request);
        else  return response(view('home'));
    }
}
