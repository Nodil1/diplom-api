<?php

namespace App\DTO;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerDTO extends BaseDTO
{
    public function __construct(
        public string   $phoneNumber,
        public int      $type,
        public ?CarDTO  $carModel = null,
        public ?UserDTO $userModel = null
    )
    {

    }

    /**
     * @param Worker $model
     * @return static
     */
    public static function fromModel($model): static
    {
        return new static(
            $model->phone_number,
            $model->type,

        );
    }
    public static function fromRequest(Request $request): static
    {
        return parent::fromRequest($request);
    }
}
