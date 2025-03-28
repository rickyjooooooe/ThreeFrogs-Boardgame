<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::get('is_admin')) {
            return redirect()->route('adminlogin')->with('error', 'You must login first');
        }
        return $next($request);
    }
}
