<?php

namespace App\Providers;

use App\Core\App\Interfaces\UserInterface;
use Illuminate\Support\ServiceProvider;
use App\Core\App\Repositories\UserRepository;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * List of Repository and Interface to connect it and instantiate it
     *
     * @param array $register
     */
    private array $register = [
        UserInterface::class => UserRepository::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        collect($this->register)->map(fn($value, $index) => $this->app->bind($index, $value));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
    }
}
