<?php

declare(strict_types = 1);

namespace App\Services\API;

use App\Contracts\Services\API\AuthServiceContract;
use App\Helpers\AppHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AuthService implements AuthServiceContract
{
    /**
     * @param string $token
     */
    public function __construct(private readonly string $token)
    {
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function isAuth(Request $request): bool
    {
        AppHelper::setHeader($request,'Content-Type', 'application/json');

        AppHelper::isLocal();

        $token = AppHelper::getHeader($request, 'X-Access-Token');

        return AppHelper::checkToken($token, $this->token);
    }
}
