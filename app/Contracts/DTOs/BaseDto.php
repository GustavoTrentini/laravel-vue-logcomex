<?php
namespace App\Contracts\DTOs;

abstract class BaseDto
{
    public function toArray(): array
    {
        return get_object_vars($this);
    }

    public static function fromArray(array $data): self
    {
        return new self($data);
    }
}
