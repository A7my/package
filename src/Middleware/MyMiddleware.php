<?php

namespace MyVendor\MyPackage\Middleware;

use Closure;
use Illuminate\Http\Request;

class MyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Middleware logic here
        return $next($request);
    }
}
