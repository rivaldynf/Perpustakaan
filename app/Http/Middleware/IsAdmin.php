<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; // Tambah Sendiri
use Illuminate\Http\Request;

class IsAdmin
{
/**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // BWA STORE
        // if(Auth::user() && Auth::user()->level == 'ADMIN' )
        if(Auth::user() && Auth::user()->level == 'admin' )
        {
            return $next($request);
        }
            
        return redirect('/');
        // BWA STORE

        // WEB UNPAS
        // if (!auth()->check() || !auth()->user()->roles) {
        //     abort(403);
        // }
        // return $next($request);

    }
}
