<?php

namespace LaravelAdminPanel\Admin\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use LaravelAdminPanel\Admin\Facades\Admin;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guest()) {
            $user = admin_model('User')->findOrFail(Auth::id());

            return $next($request);
        }

        return redirect('/');
    }
}
