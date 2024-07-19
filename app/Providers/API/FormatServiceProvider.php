<?php

declare(strict_types = 1);

namespace App\Providers\API;

use App\Contracts\Services\API\AuthServiceContract;
use App\Contracts\Services\API\FormatServiceContract;
use App\Services\API\AuthService;
use App\Services\API\FormatService;
use Carbon\Laravel\ServiceProvider;

class FormatServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(FormatServiceContract::class, FormatService::class);
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
