<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class userAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($_SERVER['REQUEST_URI'] == '/register' || $_SERVER['REQUEST_URI'] == '/forgot-password') {
            if(!(session()->get('user_id'))) {
                return $next($request);
            } else {
                session()->put('message', 'Xin chào TESTER, bạn cần phải đăng xuất để sử dụng tính năng này!');
                return Redirect::to('/');
            }
        }

        if($_SERVER['REQUEST_URI'] == '/register-confirm' ||
            $_SERVER['REQUEST_URI'] == '/register-final' ||
            $_SERVER['REQUEST_URI'] == '/reset-token' ||
            $_SERVER['REQUEST_URI'] == '/reset-final') {
            if(!(session()->get('token'))) {
                session()->put('message', 'Xin chào TESTER, bạn cần thực hiện theo quy trình để dùng tính năng này!');
                return Redirect::to('/login');
            } else {
                return $next($request);
            }   
        }

        if(session()->get('user_id')) {
            return $next($request);
        } else {
            session()->put('message', 'Bạn cần phải đăng nhập để sử dụng tính năng này!');
            return Redirect::to('/login');
        }
    }
}
