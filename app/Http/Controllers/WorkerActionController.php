<?php

namespace App\Http\Controllers;

use App\DTO\WorkerActionDTO;
use App\Models\WorkerAction;
use App\Services\WorkerActionService;
use Illuminate\Http\Request;

class WorkerActionController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', WorkerAction::class);

        return WorkerAction::all();
    }

    public function store(Request $request)
    {
        $dto = WorkerActionDTO::fromJson($request->getContent());
        $dto->idWorker = $request->user()->id;
        WorkerActionService::saveAction($dto);
    }

    public function show(WorkerAction $workerAction)
    {
        $this->authorize('view', $workerAction);

        return $workerAction;
    }

    public function update(Request $request, WorkerAction $workerAction)
    {
        $this->authorize('update', $workerAction);

        $request->validate([
            'type' => ['required', 'integer'],
            'id_task' => ['nullable', 'integer'],
            'id_worker' => ['required'],
        ]);

        $workerAction->update($request->validated());

        return $workerAction;
    }

    public function destroy(WorkerAction $workerAction)
    {
        $this->authorize('delete', $workerAction);

        $workerAction->delete();

        return response()->json();
    }
}
