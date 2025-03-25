<?php

namespace App\Http\Controllers;

use App\Contracts\DTOs\DefaultResponse;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function __construct(private AuthService $authService){}

    public function login(LoginRequest $loginRequest)
    {
        return response()->json((new DefaultResponse(
            true,
            'Usuário autenticado com sucesso',
            $this->authService->login($loginRequest)
        ))->toArray());
    }

    public function register()
    {
        return response()->json((new DefaultResponse(
            false,
            'Método não implementado',
            null
        ))->toArray());
    }
}
