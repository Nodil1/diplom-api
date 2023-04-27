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
        $taskModel = new Task([
            'name' => $task->name,
            'description' => $task->description,
            'address' => $task->address,
            'customer' => $task->customer,
            'latitude' => $task->latitude,
            'longitude' => $task->longitude,
            'created_at' => $task->createdAt,
            'expire_at' => $task->expireAt,
            'updated_at' => $task->updatedAt,
        ]);
        $taskModel->save();
        foreach ($task->type as $type) {
            (new TaskType(['id_task' => $taskModel->id, 'type' => $type]))->save();
        }
        (new TaskState(['id_task' => $taskModel->id, 'state' => TaskStateEnum::WAITING]))->save();
    }
}
