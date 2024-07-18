<?php

declare(strict_types = 1);

namespace App\Services\Log;

use App\Contracts\Repositories\LogRepositoryContract;
use App\Contracts\Services\Log\LogServiceContract;

class LogService extends BaseService implements LogServiceContract
{
    public function __construct(private readonly LogRepositoryContract $log)
    {
        parent::__construct($log);
    }
}
