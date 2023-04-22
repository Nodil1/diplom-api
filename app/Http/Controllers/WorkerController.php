<?php

namespace App\Http\Controllers;

use App\DTO\WorkerDTO;
use App\Models\Worker;
use App\Http\Requests\StoreWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;
use App\Services\WorkerService;

class WorkerController extends Controller
{

    public function index()
    {
        return request()->json(WorkerService::getAllWorkers());
    }

    public function store(StoreWorkerRequest $request)
    {
        WorkerService::createWorker(WorkerDTO::fromRequest($request));
        return request()->json();
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
