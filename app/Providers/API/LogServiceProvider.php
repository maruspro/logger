<?php

namespace App\Providers\API;

use App\Contracts\Repositories\EloquentRepositoryContract;
use App\Contracts\Repositories\LogRepositoryContract;
use App\Contracts\Services\Log\BaseServiceContract;
use App\Contracts\Services\Log\LogServiceContract;
use App\Repositories\BaseRepository;
use App\Repositories\LogRepository;
use App\Services\Log\BaseService;
use App\Services\Log\LogService;
use Illuminate\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(EloquentRepositoryContract::class, BaseRepository::class);
        $this->app->bind(LogRepositoryContract::class, LogRepository::class);

        $this->app->bind(BaseServiceContract::class, BaseService::class);
        $this->app->bind(LogServiceContract::class, LogService::class);
    }
}
