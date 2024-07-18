<?php

declare(strict_types = 1);

namespace App\Contracts\Services\API;

use Illuminate\Http\Request;

interface FormatServiceContract
{
    /**
     * @param Request $request
     * @return bool
     */
    public function isJson(Request $request): bool;
}
