<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\V1;

use App\Contracts\Services\Log\LogServiceContract;
use App\DTO\LogDto;
use App\Helpers\LangHelper;
use App\Http\Controllers\BaseController;
use App\Http\Middleware\API\IsJson;
use App\Http\Requests\API\V1\LogCreateRequest;
use App\Http\Resources\API\V1\LogResource;
use Exception;
use Illuminate\Http\JsonResponse;

class LogController extends BaseController
{
    public function __construct(private readonly LogServiceContract $service)
    {
        parent::__construct($service);
    }

    /**
     *
     * @return JsonResponse
     * @throws Exception
     */
    public function index(): JsonResponse
    {
        try {
            $data = $this->service->show();

            return $this->setTry(__FUNCTION__, LogResource::collection($data));
        } catch (Exception $e) {
            return $this->setCatch(__FUNCTION__, $e);
        }
    }

    /**
     *
     * @param LogCreateRequest $request
     * @return JsonResponse
     * @throws Exception
     */
    public function store(LogCreateRequest $request): JsonResponse
    {
        try {
            $dto = new LogDto(...$request->validated());
            $data = $this->service->create($dto);

            return $this->setTry(__FUNCTION__, LogResource::make($data));
        } catch (Exception $e) {
            return $this->setCatch(__FUNCTION__, $e);
        }
    }

    /**
     *
     * @param int $id
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            $this->service->delete($id);

            return $this->setTry(__FUNCTION__);
        } catch (Exception $e) {
            return $this->setCatch(__FUNCTION__, $e);
        }
    }
}
