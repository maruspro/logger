<?php

declare(strict_types = 1);

namespace App\Repositories;

use App\Contracts\Repositories\LogRepositoryContract;
use App\Models\Log;

class LogRepository extends BaseRepository implements LogRepositoryContract
{
    /**
     * @param Log $model
     */
    public function __construct(Log $model)
    {
        parent::__construct($model);
    }
}
