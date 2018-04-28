<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $available_langs = ['ar', 'en', 'it', 'pt-BR', 'sp'];
        $locale = $request->headers->get('Accept-Language');
        $locale_by_default = env('APP_LOCALE');

        if (in_array($locale, $available_langs))
            app('translator')->setLocale($locale);
        else
            app('translator')->setLocale($locale_by_default);

        return $next($request);
    }
}
