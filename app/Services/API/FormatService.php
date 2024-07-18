<?php

declare(strict_types = 1);

namespace App\Services\API;

use App\Contracts\Services\API\FormatServiceContract;
use Illuminate\Http\Request;

class FormatService implements FormatServiceContract
{
    /**
     * @param Request $request
     * @return bool
     */
    public function isJson(Request $request): bool
    {
        json_decode($request->getContent());

        if (json_last_error() != JSON_ERROR_NONE) {
            return false;
        }

        return true;
    }
}
