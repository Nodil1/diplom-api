<?php

namespace App\Services;

use App\DTO\WorkerActionDTO;
use App\Models\WorkerAction;

class WorkerActionService
{
    private static function fillModel(WorkerAction $workerActionModel, WorkerActionDTO $workerAction): WorkerAction
    {
        $workerActionModel->type = $workerAction->type;
        $workerActionModel->id_task = $workerAction->idTask;
        $workerActionModel->id_worker = $workerAction->idWorker;
        $workerActionModel->save();
        return $workerActionModel;
    }
    public static function saveAction(WorkerActionDTO $workerAction): void
    {
        WorkerActionService::fillModel(new WorkerAction(), $workerAction);
    }
}
