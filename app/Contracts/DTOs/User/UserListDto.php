<?php

namespace App\Contracts\DTOs\User;

use App\Contracts\DTOs\BaseDto;
use App\Models\User;

class UserListDto extends BaseDto
{
    public function __construct(
        public array $users
    ) {}
}
