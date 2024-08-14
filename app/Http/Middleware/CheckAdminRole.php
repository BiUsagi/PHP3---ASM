<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *  @param  \Illuminate\Http\Request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra xem người dùng đã đăng nhập và có vai trò admin không
        if (Auth::check() && Auth::user()->role == 1) {
            return $next($request);
        }

        // Nếu không, chuyển hướng đến trang đăng nhập hoặc trang khác
        return redirect()->route('login');
    }
}