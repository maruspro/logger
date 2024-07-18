<?php

declare(strict_types = 1);

namespace App\Enums;

enum LevelEnum: int
{
    case WARNING = 0;
    case INFO = 1;
    case ERROR = 2;

    /**
     * @return string
     */
    public function toString(): string
    {
        return match($this) {
            self::WARNING => 'warning',
            self::INFO => 'info',
            self::ERROR => 'error'
        };
    }

    /**
     * @return string
     */
    public static function toImplode(): string
    {
        return implode(',', self::toArray());
    }

    /**
     * @return array
     */
    public static function toArray(): array
    {
        $array = [];

        foreach (self::cases() as $case) {
            $array[$case->value] = self::from($case->value)->toString();
        }

        return $array;
    }

    /**
     * @param string $type
     * @return int|null
     */
    public static function toInt(string $type): ?int
    {
        $array = array_flip(self::toArray());

        if (!isset($array[$type])) {
            return null;
        }

        return $array[$type];
    }
}
