<?php

namespace App\Http\Resources\API\V1;

use App\Http\Resources\BaseCollection;

class LogCollection extends BaseCollection
{
    public $collects = LogResource::class;
}
