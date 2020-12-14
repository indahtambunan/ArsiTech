<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,  ...$role)
    {
        if (in_array($request->user()->role, $role)) {

            if ($request->user()->status == 'terverifikasi') {
                return $next($request);
            } else {
                \Auth::logout();
                // session()->flash('message', 'Akun Belum Terverifikasi Harap Menunggu.');
                return redirect()->route('login')->with('message', 'Akun Belum Terverifikasi Harap Menunggu.');
            }
        } else {
            abort(404);
        }
    }
}
