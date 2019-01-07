<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
class SetLocalLanguageClient
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
        
        App::setLocale(session('language') ? session('language') : 'en');
        //dd(session('language'))
        /*if session != null -->
            then get(session('language)
          else setLocal to 'en'
        */
        return $next($request);
    }
}
