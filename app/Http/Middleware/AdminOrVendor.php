<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminOrVendor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::guard('admin')->check() || Auth::guard('vendor')->check()) {
            return $next($request);
        }
        else{
            Auth::logout();
            toastr()->error('Please Login First!');
            return redirect()->route('auth.admin.login.view');
        }

        // return $next($request);
    }
}
