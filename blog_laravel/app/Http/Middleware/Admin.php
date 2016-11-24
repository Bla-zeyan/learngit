<?php

namespace blog\Http\Middleware;

use Closure;

class Admin
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
      if(!$request->session()->has('uname'))
      {
        return redirect()->route('index');
      }
         return $next($request);
    }
}
