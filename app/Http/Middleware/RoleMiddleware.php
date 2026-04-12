<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $guard): Response
    {
        if (!Auth::guard($guard)->check()) {

            if (Auth::guard('admin')->check()) {
                return redirect('admin.dashboard');
            }

            if (Auth::guard('judges')->check()) {
                return redirect('judges.dashboard');
            }

            if (Auth::guard('participants')->check()) {
                return redirect('participants.dashboard');
            }

            if (Auth::guard('voters')->check()) {
                return redirect('voters.dashboard');
            }

            return redirect('/login');
        }

        # return values
        return $next($request);
    }
}
