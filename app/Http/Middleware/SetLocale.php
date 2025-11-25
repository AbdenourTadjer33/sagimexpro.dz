<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // 1. Check for query param first
        $locale = $request->query('locale');

        // 2. Fallback to cookie if query param not present
        if (!$locale) {
            $locale = $request->cookie('lang');
        }

        // 3. Validate locale
        if (!in_array($locale, ['fr', 'en'])) {
            $locale = config('app.locale'); // default locale
        }

        // 4. Set Laravel locale
        App::setLocale($locale);

        // 5. If query param exists, set the cookie for future requests
        $response = $next($request);
        if ($request->query('locale')) {
            $minutes = 60 * 24 * 365; // 1 year
            Cookie::queue('lang', $locale, $minutes);
        }

        return $response;
    }
}
