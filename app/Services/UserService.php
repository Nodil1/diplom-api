<?php

namespace App\Services;

use App\DTO\UserDTO;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

final class UserService
{
    /**
     * @throws \Throwable
     */
    static function createUser(UserDTO $user, int $type): UserDTO
    {
        return DB::transaction(function () use($user, $type) {
            $userModel = new User;
            $userModel->fio = $user->fio;
            $userModel->name = $user->login;
            $userModel->type = $type;
            $userModel->password = $user->password;
            $userModel->last_action = Carbon::now();
            $userModel->save();
            return UserDTO::fromModel($userModel);
        });
    }
}
