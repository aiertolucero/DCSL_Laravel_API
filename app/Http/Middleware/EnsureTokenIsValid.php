<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValid
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
        $header = $request->header('Basic-Token');

        if ($header !== env('BASIC_AUTH_TOKEN')) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
