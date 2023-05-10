<?php

namespace App\DTO;

use App\Models\WorkerAction;
use Faker\Provider\Base;

class WorkerActionDTO extends BaseDTO
{
    public function __construct(
        public int $idWorker,
        public int $type,
        public ?int $idTask = null,
        public ?int $id = null,
    )
    {
    }

    /**
     * @param WorkerAction $model
     * @return static
     */
    public static function fromModel($model): static
    {
        return new static(
          $model->id_worker,
          $model->type,
          $model->id_task,
          $model->id
        );
    }
}
