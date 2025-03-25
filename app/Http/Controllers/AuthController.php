<?php

namespace App\Http\Controllers;

use App\Contracts\DTOs\DefaultResponse;
use App\Http\Requests\LoginRequest;
use App\Contracts\Interfaces\Services\IAuthService;

class AuthController extends Controller
{
    public function __construct(private IAuthService $authService){}

    public function login(LoginRequest $loginRequest)
    {
        return response()->json((new DefaultResponse(
            true,
            'Usuário autenticado com sucesso',
            $this->authService->login($loginRequest)
        ))->toArray());
    }

}
