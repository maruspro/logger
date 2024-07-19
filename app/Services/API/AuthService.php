<?php

declare(strict_types = 1);

namespace App\Services\API;

use App\Contracts\Services\API\AuthServiceContract;
use Illuminate\Http\Request;

class AuthService implements AuthServiceContract
{
    /**
     * @param string $token
     */
    public function __construct
    (
        private readonly string $token
    )
    {

    }

    /**
     * @param Request $request
     * @return bool
     */
    public function isAuth(Request $request): bool
    {
        $request->headers->set('Accept', 'application/json');

        $token = $request->header('X-Access-Token');

        if (app()->isLocal()) {
            return true;
        }

        if (empty($token) || $token !== $this->token) {
            return false;
        }

        return true;
    }
}
