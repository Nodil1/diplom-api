<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WorkerAction;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorkerActionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, WorkerAction $workerAction): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, WorkerAction $workerAction): bool
    {
    }

    public function delete(User $user, WorkerAction $workerAction): bool
    {
    }

    public function restore(User $user, WorkerAction $workerAction): bool
    {
    }

    public function forceDelete(User $user, WorkerAction $workerAction): bool
    {
    }
}
