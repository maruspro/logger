<?php

declare(strict_types = 1);

namespace App\Http\Middleware\API;

use App\Contracts\Services\API\AuthServiceContract;
use App\Helpers\LangHelper;
use App\Traits\ApiResponse;
use Closure;
use Exception;
use Illuminate\Http\Request;

class Auth
{
    use ApiResponse;

    public array $except = [
//        'kyc/webhook/*'
    ];

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @throws Exception
     */
    public function handle(Request $request, Closure $next)
    {
        if (!app(AuthServiceContract::class)->isAuth($request)) {
            return $this->apiResponseUnauthorized(LangHelper::getTrans('app.incorrect_auth'));
        }

        return $next($request);
    }
}
