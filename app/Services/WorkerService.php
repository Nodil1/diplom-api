<?php

namespace App\Services;

use App\DTO\UserDTO;
use App\DTO\WorkerDTO;
use App\Models\User;
use App\Models\Worker;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Throwable;


final class WorkerService
{
    /**
     * @throws Throwable
     */

    public static function getAllWorkers(): Collection
    {
        return Worker::all();
    }
    public static function createWorker(UserDTO $user, WorkerDTO $worker): void
    {
        DB::transaction(function () use($user, $worker) {
            $userModel = new User;
            $userModel->fio = $user->fio;
            $userModel->name = $user->login;
            $userModel->type = $user->type;
            $userModel->password = $user->password;
            $userModel->last_action = Carbon::now();
            $userModel->save();

            $workerModel = new Worker;
            $workerModel->type = $worker->type;
            $workerModel->phone_number = $worker->phoneNumber;
            $workerModel->save();
        });
    }
}
