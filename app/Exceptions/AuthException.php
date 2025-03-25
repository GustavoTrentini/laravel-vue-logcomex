<?php

namespace App\Exceptions;

use App\Contracts\DTOs\DefaultResponse;
use Exception;

class AuthException extends Exception
{
    public function __construct($message = 'Usuário não autenticado', $code = 401)
    {
        parent::__construct($message, $code);
    }

    public function render()
    {
        return response()->json((
            new DefaultResponse(false, $this->message, null)
        )->toArray(), $this->code);
    }
}
