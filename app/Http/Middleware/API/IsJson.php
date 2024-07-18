<?php

namespace App\Http\Middleware\API;

use App\Contracts\Services\API\FormatServiceContract;
use App\Helpers\LangHelper;
use App\Traits\ApiResponse;
use Closure;
use Exception;

class IsJson
{
    use ApiResponse;

    /**
     * @param $request
     * @param Closure $next
     * @return mixed
     * @throws Exception
     */
    public function handle($request, Closure $next): mixed
    {
        if (!app(FormatServiceContract::class)->isJson($request)) {
            return $this->apiResponseBadRequest(LangHelper::getTrans('app.incorrect_json'));
        }

        return $next($request);
    }
}
