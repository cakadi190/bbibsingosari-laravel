<?php

namespace App\Providers;

use App\Enum\LanguageEnum;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $languageList = LanguageEnum::cases();

        View::share('languages', $languageList);
    }
}
