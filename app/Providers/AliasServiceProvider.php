<?php

namespace App\Providers;

use App\Helpers\LanguageHelper;
use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class AliasServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        # Get the AliasLoader instance
        $loader = AliasLoader::getInstance();

        # Set your alias here
        $loader->alias('Gravatar', Gravatar::class);
        $loader->alias('Language', LanguageHelper::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
