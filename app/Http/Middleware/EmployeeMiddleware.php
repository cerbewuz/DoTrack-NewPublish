<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EmployeeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()){
            return redirect()->route('login');
         }
        $usertype = Auth::user()->usertype;
        if ($usertype == 0) {
            return $next($request);
        }
        if ($usertype == 1) {
            return abort(403, 'You are not Authorized to access.');
        }
        return redirect()->route('login');
    }
    
}
