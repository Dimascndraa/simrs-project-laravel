<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class AutoLogoutMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user) {
            $sessionKey = 'lastActivityTime:' . $user->id;

            if (Cache::has($sessionKey)) {
                $lastActivityTime = Carbon::parse(Cache::get($sessionKey));

                if (Carbon::now()->diffInMinutes($lastActivityTime) >= 1) {
                    Auth::logout();
                    Cache::forget($sessionKey);
                    return redirect('/login')->with('logout', 'Anda telah logout karena tidak ada aktivitas dalam 1 menit.');
                }
            }

            Cache::put($sessionKey, Carbon::now(), 1);
        }

        return $next($request);
    }
}
