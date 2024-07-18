<?php

declare(strict_types = 1);

namespace App\Traits;

use App\DTO\ResponseDto;
use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait ApiResponse
{
    /**
     * Ответ
     *
     * @param bool $success ,
     * @param int $status
     * @param mixed $data
     * @param mixed $message
     * @return array
     * @throws Exception
     */
    public function dto
    (
        int $status,
        bool $success,
        mixed $data,
        mixed $message
    ): array
    {
        return (new ResponseDto($status, $success, $data, $message))->toArray();
    }

    /**
     * Ответ
     *
     * @param bool $success ,
     * @param int $status
     * @param mixed $data
     * @param mixed $message
     * @return JsonResponse
     * @throws Exception
     */
    public function apiResponse
    (
        int $status,
        bool $success,
        mixed $data,
        mixed $message
    ): JsonResponse
    {
        $dto = $this->dto($status, $success, $data, $message);

        return response()->json($dto, $status);
    }

    /**
     * Успешный ответ
     *
     * @param ?string $message
     * @param mixed $data
     * @return JsonResponse
     * @throws Exception
     */
    public function apiResponseSuccess
    (
        ?string $message = null,
        mixed $data = null,
    ): JsonResponse
    {
        return $this->apiResponse(Response::HTTP_OK, true, $data, $message);
    }

    /**
     * Успешный ответ, но нет данных
     *
     * @param ?string $message
     * @param mixed $data
     * @return JsonResponse
     * @throws Exception
     */
    public function apiResponseNoContent
    (
        ?string $message = null,
        mixed $data = null,
    ): JsonResponse
    {
        return $this->apiResponse(Response::HTTP_NO_CONTENT, true, $data, $message);
    }

    /**
     * Неуспешный ответ
     *
     * @param ?string $message
     * @param mixed $data
     * @return JsonResponse
     * @throws Exception
     */
    public function apiResponseUnexpected
    (
        ?string $message = null,
        mixed $data = null,
    ): JsonResponse
    {
        return $this->apiResponse(Response::HTTP_INTERNAL_SERVER_ERROR, false, $data, $message);
    }

    /**
     * Конфликт
     *
     * @param ?string $message
     * @param mixed $data
     * @return JsonResponse
     * @throws Exception
     */
    public function apiResponseConflict
    (
        ?string $message = null,
        mixed $data = null,
    ): JsonResponse
    {
        return $this->apiResponse(Response::HTTP_CONFLICT, false, $data, $message);
    }

    /**
     * Ресурс не найден
     *
     * @param ?string $message
     * @param mixed $data
     * @return JsonResponse
     * @throws Exception
     */
    public function apiResponseNotFound
    (
        ?string $message = null,
        mixed $data = null,
    ): JsonResponse
    {
        return $this->apiResponse(Response::HTTP_NOT_FOUND, false, $data, $message);
    }

    /**
     * Плохой запрос
     *
     * @param ?string $message
     * @param mixed $data
     * @return JsonResponse
     * @throws Exception
     */
    public function apiResponseBadRequest
    (
        ?string $message = null,
        mixed $data = null,
    ): JsonResponse
    {
        return $this->apiResponse(Response::HTTP_BAD_REQUEST, false, $data, $message);
    }

    /**
     * Метод не поддерживается
     *
     * @param ?string $message
     * @param mixed $data
     * @return JsonResponse
     * @throws Exception
     */
    public function apiResponseMethodNotAllowed
    (
        ?string $message = null,
        mixed $data = null,
    ): JsonResponse
    {
        return $this->apiResponse(Response::HTTP_METHOD_NOT_ALLOWED, false, $data, $message);
    }

    /**
     * Ошибка валидации
     *
     * @param mixed $message
     * @param mixed $data
     * @return JsonResponse
     * @throws Exception
     */
    public function apiResponseUnprocessableEntity
    (
        mixed $message = null,
        mixed $data = null,
    ): JsonResponse
    {
        return $this->apiResponse(Response::HTTP_UNPROCESSABLE_ENTITY, false, $data, $message);
    }

    /**
     * Доступ запрещен
     *
     * @param ?string $message
     * @param mixed $data
     * @return JsonResponse
     * @throws Exception
     */
    public function apiResponseForbidden
    (
        ?string $message = null,
        mixed $data = null,
    ): JsonResponse
    {
        return $this->apiResponse(Response::HTTP_FORBIDDEN, false, $data, $message);
    }

    /**
     * Не авторизован
     *
     * @param ?string $message
     * @param mixed $data
     * @return JsonResponse
     * @throws Exception
     */
    public function apiResponseUnauthorized
    (
        ?string $message = null,
        mixed $data = null,
    ): JsonResponse
    {
        return $this->apiResponse(Response::HTTP_UNAUTHORIZED, false, $data, $message);
    }
}
