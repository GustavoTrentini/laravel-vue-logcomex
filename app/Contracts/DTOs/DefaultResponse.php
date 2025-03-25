<?php

namespace App\Contracts\DTOs;

class DefaultResponse extends BaseDto
{
    public function __construct(
        public bool $success,
        public string $message,
        public mixed $data
    ) {}
}
