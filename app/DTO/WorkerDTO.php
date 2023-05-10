<?php

namespace App\DTO;

use App\Const\WorkerTypeEnum;
use App\Models\User;
use App\Models\Worker;
use App\Models\WorkerType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class WorkerDTO extends BaseDTO
{
    public function __construct(
        public string   $phoneNumber,
        public array      $type,
        public ?UserDTO $userModel = null,
        public ?CarDTO  $carModel = null,
        public ?int     $id = null
    )
    {
        if ($this->userModel){
            $this->id = $this->userModel->id;
        }
    }

    /**
     * @param Worker $model
     * @return static
     */
    public static function fromModel($model): static
    {
        $user = UserDTO::fromModel(User::find($model->id));
        return new static(
            $model->phone_number,
            $model->types()->map(function (WorkerType $type) {
                return $type->type;
            })->toArray(),
            userModel: $user,
            id: $user->id

        );
    }


}
