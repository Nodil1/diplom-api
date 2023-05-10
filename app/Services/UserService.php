<?php

namespace App\Services;

use App\DTO\UserDTO;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

final class UserService
{
    /**
     * @throws Throwable
     */
    private static function fillModel(User $userModel, UserDTO $user): UserDTO
    {
        return DB::transaction(function () use ($userModel, $user) {
            $userModel->fio = $user->fio;
            $userModel->name = $user->login;
            $userModel->type = $user->type;
            if (strlen($user->password) !== 0) {
                $userModel->password = Hash::make($user->password);
            }
            $userModel->last_action = Carbon::now();
            $userModel->save();
            return UserDTO::fromModel($userModel);
        });
    }

    /**
     * @throws Throwable
     */
    static function createUser(UserDTO $user): UserDTO
    {
        return self::fillModel(new User(), $user);
    }

    /**
     * @throws Throwable
     */
    static function updateUser(UserDTO $user): UserDTO
    {
        $userModel = User::find($user->id);

        $user->type = $userModel->type;
        return self::fillModel($userModel, $user);
    }
}
