<?php

namespace App\Http\Controllers;

use App\Contracts\DTOs\DefaultResponse;
use App\Contracts\Interfaces\Services\IUserService;

class UserController extends Controller
{
    public function __construct(private IUserService $userService){}

    public function list()
    {
        return response()->json((new DefaultResponse(
            true,
            'Usuários cadastrados no sistema',
            $this->userService->list()->toArray()
        ))->toArray());
    }
}
