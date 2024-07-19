<?php

declare(strict_types = 1);

namespace App\Helpers;

class JsonHelper
{
    /**
     * @param string $string
     * @return void
     */
    public static function decode(string $string): void
    {
        json_decode($string);
    }

    /**
     * @return bool
     */
    public static function checkError(): bool
    {
        if (json_last_error() != JSON_ERROR_NONE) {
            return false;
        }

        return true;
    }
}
