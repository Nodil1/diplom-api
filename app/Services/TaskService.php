<?php

namespace App\Services;

use App\Const\TaskStateEnum;
use App\DTO\TaskDTO;
use App\Events\TaskAssignToWorkerEvent;
use App\Models\Task;
use App\Models\TaskState;
use App\Models\TaskType;
use Illuminate\Support\Collection;

final class TaskService
{
    private static function fillModel(Task $taskModel, TaskDTO $task): void
    {
        $taskModel->name = $task->name;
        $taskModel->description = $task->description;
        $taskModel->address = $task->address;
        $taskModel->customer = $task->customer;
        $taskModel->latitude = $task->latitude;
        $taskModel->longitude = $task->longitude;
        $taskModel->expired_at = $task->expireAt;
        $taskModel->id_worker = $task->worker?->id;
        $taskModel->save();
        TaskType::where("id_task", $taskModel->id)->delete();
        foreach ($task->taskType as $type) {
            $taskType = new TaskType();
            $taskType->id_task = $taskModel->id;
            $taskType->type = $type;
            $taskType->save();
        }
        $taskState = new TaskState();
        $taskState->id_task = $taskModel->id;
        $taskState->state = $task->state;
        $taskState->save();
    }

    public static function getTasks(): \Illuminate\Support\Collection
    {
        return TaskDTO::convertCollection(Task::all());
    }

    /**
     * @param int $id
     * @return Collection<TaskDTO>
     */
    public static function getTasksWhereWorkerId(int $id): Collection
    {
        return TaskDTO::convertCollection(Task::where('id_worker', $id)->get());
    }

    public static function createTask(TaskDTO $task): void
    {
        TaskService::fillModel(new Task(), $task);
    }

    public static function updateTask(TaskDTO $task, Task $taskModel): void
    {
        if ($task->worker && $taskModel->id_worker === null) {
            TaskAssignToWorkerEvent::dispatch($task);
            echo "Prikol";
        }
        TaskService::fillModel($taskModel, $task);
    }
}
