<?php

namespace App\Http\Middleware;

use App\Enum\LanguageEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ViewShareAfterSessionMiddleware
{
    /**
     * Place your view share loader here
     *
     * @return void
     */
    public function loadViewShare(): void
    {
        $currentLanguage = LanguageEnum::getCurrentLanguage();

        View::share('currLang', $currentLanguage);
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $this->loadViewShare();

        return $next($request);
    }
}
