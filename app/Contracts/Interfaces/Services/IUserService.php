<?php
namespace App\Contracts\Interfaces\Services;

use App\Contracts\DTOs\User\UserListDto;

interface IUserService
{
    public function list(): UserListDto;
}
