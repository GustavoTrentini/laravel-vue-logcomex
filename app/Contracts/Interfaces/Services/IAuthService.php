<?php
namespace App\Contracts\Interfaces\Services;

use App\Contracts\DTOs\Auth\LoginResponseDto;
use App\Http\Requests\LoginRequest;

interface IAuthService
{
    public function login(LoginRequest $credentials): LoginResponseDto;
}
