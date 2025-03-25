<?php
namespace App\Services;

use App\Contracts\DTOs\Auth\LoginResponseDto;
use App\Contracts\Interfaces\Services\IAuthService;
use App\Exceptions\AuthException;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthService implements IAuthService
{
    public function __construct(private User $userModel){}

    public function login(LoginRequest $credentials): LoginResponseDto
    {
        throw_if(!Auth::attempt($credentials->validated()), AuthException::class);

        $user = Auth::user();

        return new LoginResponseDto(
            token: $user->createToken('token')->plainTextToken,
            user: $user,
        );
    }
}
