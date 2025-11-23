<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if locale is in the URL
        $locale = $request->segment(1);
        
        // List of supported locales
        $supportedLocales = ['en', 'es'];
        
        // If locale is in URL and supported, use it
        if (in_array($locale, $supportedLocales)) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        } 
        // Otherwise, check session
        elseif (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }
        // Default to English
        else {
            App::setLocale('en');
            Session::put('locale', 'en');
        }
        
        return $next($request);
    }
}
