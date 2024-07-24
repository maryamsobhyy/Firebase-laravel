<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class IsAdmin
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
        $uid = Session::get('uid');
        // $verify = app('firebase.auth')->getUser($uid)->emailVerified;
        // TODO check user in firestore databese
        return $next($request);
    }
}
