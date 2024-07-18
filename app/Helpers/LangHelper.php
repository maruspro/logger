<?php

declare(strict_types = 1);

namespace App\Helpers;

class LangHelper
{
    /**
     * @param string $key
     * @param string|null $name
     * @return string
     */
    public static function getTrans(string $key, ?string $name = null): string
    {
        return trans("messages.{$key}", ['name' => $name]);
    }
}
