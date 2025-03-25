<?php
namespace App\Contracts\DTOs\Auth;

use App\Contracts\DTOs\BaseDto;
use App\Models\User;

class LoginResponseDto extends BaseDto
{
    public function __construct(
        public string $token,
        public User $user
    ) {}
}
