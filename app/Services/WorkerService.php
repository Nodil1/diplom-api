<?php

namespace App\Services;

use App\DTO\UserDTO;
use App\DTO\WorkerDTO;
use App\Models\User;
use App\Models\Worker;
use App\Models\WorkerType;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Throwable;


final class WorkerService
{

    /**
     * @return Collection<WorkerDTO>
     */
    public static function getAllWorkers(): Collection
    {
        return WorkerDTO::convertCollection(Worker::all());
    }

    /**
     * @throws Throwable
     */
    public static function updateWorker(WorkerDTO $worker): void
    {
        DB::transaction(function () use ($worker) {
            $workerModel = Worker::find($worker->userModel->id);
            $workerModel->phone_number = $worker->phoneNumber;
            $workerModel->save();
        });
    }

    /**
     * @throws Throwable
     */
    public static function createWorker(WorkerDTO $worker): void
    {
        DB::transaction(function () use ($worker) {
            $workerModel = new Worker;
            $workerModel->id = $worker->userModel->id;
            $workerModel->phone_number = $worker->phoneNumber;
            $workerModel->save();
            foreach ($worker->type as $type) {
                $typeModel = new WorkerType();
                $typeModel->type = $type;
                $typeModel->id_worker = $workerModel->id;
                $typeModel->save();
            }

        });
    }
}
