<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Language
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the first segment matches a language code
        if (! array_key_exists($request->segment(1), config('translatable.locales'))) {

            // Store segments in array
            $segments = $request->segments();

            // Set the default language code as the first segment
            $segments = array_prepend($segments, config('app.fallback_locale'));

            // Redirect to the correct url
            return redirect()->to(implode('/', $segments));
        }

        return $next($request);
    }
}
