<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
         //通过session来检测用户是否登陆
        if($request->session()->has('id')) {
            //进入下一层处理
            return $next($request);
        }else{
            //使页面跳转到指定的页面
            return redirect('/login');
        }
    }
}
