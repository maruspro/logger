<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Helpers\LangHelper;
use App\Http\Middleware\API\IsJson;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

abstract class BaseController extends Controller
{
    use ApiResponse;

    public function __construct(private $service)
    {
        $this->middleware(IsJson::class)->only('store');
    }

    /**
     * @param string $key
     * @param JsonResource|null $resource
     * @return JsonResponse
     * @throws Exception
     */
    public function setTry(string $key, ?JsonResource $resource = null): JsonResponse
    {
        return $this->apiResponseSuccess(
            LangHelper::getTrans("logger.success.{$key}"),
            $resource
        );
    }

    /**
     * @param string $key
     * @param Exception $e
     * @return JsonResponse
     * @throws Exception
     */
    public function setCatch(string $key, Exception $e): JsonResponse
    {
        report($e);

        return $this->apiResponseUnexpected(
            LangHelper::getTrans("logger.failed.{$key}")
        );
    }
}
