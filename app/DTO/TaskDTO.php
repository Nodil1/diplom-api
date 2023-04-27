<?php

namespace App\DTO;

use App\Models\Task;
use App\Models\TaskType;
use Illuminate\Support\Carbon;

/**
 * @extends BaseDTO<Task>
 */
class TaskDTO extends BaseDTO
{

    /**
     * @param string $name
     * @param string $description
     * @param string $address
     * @param string $customer
     * @param array<int> $type
     * @param float $latitude
     * @param float $longitude
     * @param int $state
     * @param Carbon $createdAt
     * @param Carbon $expireAt
     * @param Carbon $updatedAt
     * @param WorkerDTO|null $worker
     * @param Carbon|null $finishedAt
     * @param TaskDTO|null $parentTask
     */
    public function __construct(
        public string     $name,
        public string     $description,
        public string     $address,
        public string     $customer,
        public array      $type,
        public float      $latitude,
        public float      $longitude,
        public int        $state,
        public Carbon     $createdAt,
        public Carbon     $expireAt,
        public Carbon     $updatedAt,
        public ?WorkerDTO $worker = null,
        public ?Carbon    $finishedAt = null,
        public ?TaskDTO   $parentTask = null
    )
    {
    }

    /**
     * @param Task $model
     * @return static
     */
    static public function fromModel($model): static
    {
        return new static(
            $model->name,
            $model->description,
            $model->address,
            $model->customer,
            $model->types()->map(fn (TaskType $type) => $type->id)->toArray(),
            $model->latitude,
            $model->longitude,
            $model->state()->id,
            $model->created_at,
            $model->expired_at,
            $model->updated_at,
            $model->worker(),
            $model->finishState()->created_at,
            $model->parentTask()
        );
    }

}
