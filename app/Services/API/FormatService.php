<?php

declare(strict_types = 1);

namespace App\Services\API;

use App\Contracts\Services\API\FormatServiceContract;
use App\Helpers\JsonHelper;
use Illuminate\Http\Request;

class FormatService implements FormatServiceContract
{
    /**
     * @param Request $request
     * @return bool
     */
    public function isJson(Request $request): bool
    {
        JsonHelper::decode($request->getContent());

        return JsonHelper::checkError();
    }
}
