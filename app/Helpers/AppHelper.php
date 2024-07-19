<?php

declare(strict_types = 1);

namespace App\Helpers;

use Illuminate\Http\Request;

class AppHelper
{
    /**
     * @return bool
     */
    public static function isLocal(): bool
    {
        return app()->isLocal();
    }

    /**
     * @param Request $request
     * @param string $type
     * @param string $value
     * @return void
     */
    public static function setHeader
    (
        Request $request,
        string $type,
        string $value
    ): void
    {
        $request->headers->set($type, $value);
    }

    /**
     * @param Request $request
     * @param string $type
     * @return ?string
     */
    public static function getHeader(Request $request, string $type): ?string
    {
        return $request->header($type);
    }

    /**
     * @param ?string $externalToken
     * @param string $token
     * @return bool
     */
    public static function checkToken(?string $externalToken, string $token): bool
    {
        if (empty($externalToken) || $externalToken !== $token) {
            return false;
        }

        return true;
    }
}
