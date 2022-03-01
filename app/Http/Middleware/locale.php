<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class locale
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
       // $app_url = env('APP_URL');
        $availableLocale = array('en','bn');

        if(Session::has('APP_LOCALE')){
          $locale = in_array(session('APP_LOCALE'),$availableLocale) ? session('APP_LOCALE'): config('app.locale');
          app()->setLocale($locale);
        }

        return $next($request);
    }
}
