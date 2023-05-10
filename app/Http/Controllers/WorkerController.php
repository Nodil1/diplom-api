<?php

namespace App\Http\Controllers;

use App\Const\UserType;
use App\DTO\WorkerDTO;
use App\Models\Worker;
use App\Services\UserService;
use App\Services\WorkerService;
use Illuminate\Http\Request;
use Throwable;

class WorkerController extends Controller
{

    public function index()
    {
        return response()->json(WorkerService::getAllWorkers());
    }

    /**
     * @throws Throwable
     */
    public function store(Request $request)
    {
        $worker = WorkerDTO::fromJson($request->getContent());
        print_r($worker);
        $worker->userModel = UserService::createUser($worker->userModel, UserType::WORKER);
        WorkerService::createWorker($worker);
        return response()->json();
    }

    public function show(Worker $worker)
    {
        //
    }

    /**
     * @throws Throwable
     */
    public function update(Request $request, Worker $worker)
    {
        $workerDTO = WorkerDTO::fromJson($request->getContent());
        UserService::updateUser($workerDTO->userModel);
        WorkerService::updateWorker($workerDTO);
    }

    public function destroy(Worker $worker)
    {
        //
    }
}
