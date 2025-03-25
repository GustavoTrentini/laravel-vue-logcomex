<?php
namespace App\Contracts\Interfaces\Services;

use App\Contracts\DTOs\Auth\LoginResponseDto;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

interface IAuthService
{
    public function login(LoginRequest $credentials): LoginResponseDto;

    public function logout(Request $request): void;
}
