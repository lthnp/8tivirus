<?php

namespace App\Http\Middleware;

use Closure;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ComingSoon
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
        $now = (new DateTime("now", new DateTimeZone('Asia/Bangkok')))->format('Y-m-d H:i:s');
        $opening = (new DateTime('2021-07-10 09:00:00', new DateTimeZone('Asia/Bangkok')))->format('Y-m-d H:i:s');
        if($now < $opening){
            return new Response(view('pages.coming-soon'));
        }
        return $next($request);
    }
}
