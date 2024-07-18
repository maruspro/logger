<?php

declare(strict_types = 1);

namespace App\Providers\API;

use App\Contracts\Services\API\AuthServiceContract;
use App\Services\API\AuthService;
use Carbon\Laravel\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(AuthServiceContract::class, fn() => new AuthService(config('auth.access_token')));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
