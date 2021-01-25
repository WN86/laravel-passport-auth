<?php


namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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
        $arr = [
            'hi'
        ];
        if(!in_array($request->greeting,$arr)){

            return response('Unauthorized.404. Please edit the url as "http://127.0.0.1:8000/post?greeting=(the secret access string here)".', 404);
        }
        return $next($request);
    }
}

