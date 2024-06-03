<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Vendor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        
        if (!Auth::guard('vendor')->check()) {
            toastr()->error('Please Login First!');
            return redirect()->route('auth.vendor.login.view');
        }
        else{
            $vendor = Auth::guard('vendor')->user() ; 
            if($vendor->status == 0){
                return redirect()->route('auth.vendor.deactivated') ; 
            }
        }

        return $next($request);
    }
}