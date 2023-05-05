<?php

namespace App\Services;

use App\Const\TaskStateEnum;
use App\DTO\TaskDTO;
use App\Models\Task;
use App\Models\TaskState;
use App\Models\TaskType;

final class TaskService
{
    public static function getTasks(): \Illuminate\Support\Collection
    {
        return TaskDTO::convertCollection(Task::all());
    }

    public static function createTask(TaskDTO $task): void
    {
        $taskModel = new Task();
        $taskModel->name = $task->name;
        $taskModel->description = $task->description;
        $taskModel->address = $task->address;
        $taskModel->customer = $task->customer;
        $taskModel->latitude = $task->latitude;
        $taskModel->longitude = $task->longitude;
        $taskModel->expired_at = $task->expireAt;

        $taskModel->save();
        foreach ($task->taskType as $type) {
            $taskType = new TaskType();
            $taskType->id_task = $taskModel->id;
            $taskType->type = $type;
            $taskType->save();
        }
        $taskState = new TaskState();
        $taskState->id_task = $taskModel->id;
        $taskState->state = TaskStateEnum::WAITING;
        $taskState->save();
    }
}
