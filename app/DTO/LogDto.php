<?php

declare(strict_types = 1);

namespace App\DTO;

class LogDto extends BaseDto
{
    public function __construct
    (
        protected readonly string $client,
        protected readonly string $level,
        protected readonly string $message,
        protected readonly int $userId,
    )
    {
        parent::__construct();
    }
}
