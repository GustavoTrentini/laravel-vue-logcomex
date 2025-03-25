<?php
namespace App\Services;

use App\Contracts\DTOs\User\UserListDto;
use App\Contracts\Interfaces\Services\IUserService;
use App\Models\User;

class UserService implements IUserService
{

    /**
     * @param  private
     */
    public function __construct(private User $userModel){}

    public function list(): UserListDto
    {
        return new UserListDto(
            users: $this->userModel->all()->toArray()
        );
    }
}
