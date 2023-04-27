<?php

namespace App\Http\Controllers;

use App\DTO\TaskDTO;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Services\TaskService;

class TaskController extends Controller
{

    public function index()
    {
        return response()->json(TaskService::getTasks());
    }


    public function store(StoreTaskRequest $request)
    {
        TaskService::createTask(TaskDTO::fromJson($request->getContent()));
    }

    public function show(Task $task)
    {
        //
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    public function destroy(Task $task)
    {
        //
    }
}
