<?php

namespace App\Http\Controllers;

use App\Const\UserType;
use App\Const\WorkerTypeEnum;
use App\DTO\WorkerDTO;
use App\Models\User;
use App\Models\Worker;
use App\Http\Requests\StoreWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;
use App\Services\UserService;
use App\Services\WorkerService;
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
    public function store(StoreWorkerRequest $request)
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

    public function update(UpdateWorkerRequest $request, Worker $worker)
    {
        //
    }

    public function destroy(Worker $worker)
    {
        //
    }
}
