<?php

namespace App\Http\Middleware;

use Closure;

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
        
        App::setLocale(session(['language']) ? session('language') : 'en');
        /*if session != null -->
            then get(session('language)
          else setLocal to 'en'
        */
        return $next($request);
    }
}
