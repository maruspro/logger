<?php

declare(strict_types = 1);

namespace App\DTO;

class ResponseDto extends BaseDto
{
    const STATUS = 'status';
    const SUCCESS = 'success';
    const DATA = 'data';
    const MESSAGE = 'message';

    public function __construct
    (
        protected readonly int $status,
        protected readonly bool $success,
        protected readonly mixed $data,
        protected readonly mixed $message,
    )
    {
        parent::__construct();
    }
}
