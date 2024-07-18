<?php

declare(strict_types = 1);

namespace App\Exceptions;

use App\Helpers\LangHelper;
use App\Traits\ApiResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    use ApiResponse;

    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e): JsonResponse|array
    {
        if ($e instanceof ModelNotFoundException) {
            $model = strtolower(class_basename($e->getModel()));

            return $this->apiResponseNotFound(LangHelper::getTrans('logger.model_not_found', $model));
        }

        if ($e instanceof ValidationException || $e instanceof HttpResponseException) {
            $errors = [];
            $errorsWithKeys = $e->validator->errors()->getMessages();

            foreach ($errorsWithKeys as $messages) {
                $errors[] = implode('|', $messages);
            }

            return $this->apiResponseUnprocessableEntity($errors);
        }

        if ($e instanceof NotFoundHttpException) {
            return $this->apiResponseNotFound(LangHelper::getTrans('app.route_not_found'));
        }

        if ($e instanceof MethodNotAllowedHttpException) {
            return $this->apiResponseMethodNotAllowed(LangHelper::getTrans('app.method_not_allowed'));
        }

        return $this->apiResponseUnexpected($e->getMessage());
    }
}
