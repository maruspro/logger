<?php

declare(strict_types = 1);

namespace App\Contracts\Services\API;

use Illuminate\Http\Request;

interface AuthServiceContract
{
    /**
     * @param Request $request
     * @return bool
     */
    public function isAuth(Request $request): bool;

    /**
     * @param Request $request
     * @return bool
     */
    public function isJson(Request $request): bool;
}
