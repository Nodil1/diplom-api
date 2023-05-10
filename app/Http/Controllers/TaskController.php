<?php

namespace App\Http\Controllers;

use App\DTO\TaskDTO;
use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        return response()->json(TaskService::getTasks());
    }


    public function store(Request $request)
    {
        TaskService::createTask(TaskDTO::fromJson($request->getContent()));
    }

    public function workerTasks(Request $request)
    {

        return response()->json(TaskService::getTasksWhereWorkerId($request->user()->id));
    }
    public function show(Task $task)
    {
        return response()->json(TaskDTO::fromModel($task));
    }

    public function update(Request $request, Task $task)
    {
        $request->getData()->merge(['id' => $task->id]);
        TaskService::updateTask(TaskDTO::fromJson($request->getContent()), $task);
    }

    public function destroy(Task $task)
    {
        //
    }
}
