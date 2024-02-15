<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Salesman;
use Illuminate\Support\Facades\Auth;

class CheckSalesman
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         if (!Auth::guard('salesmen')->check()) {
            // Perform custom authentication logic for employers
            // If authentication fails, you can redirect or respond accordingly
            return redirect()->route('home')->with('error', 'Please login to access your pages.');
        }

        return $next($request);
    }
}
