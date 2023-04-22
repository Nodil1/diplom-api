<?php

namespace App\DTO;


use App\Models\User;
use Carbon\Carbon;

/**
 * @extends BaseDTO<User>
 */
class UserDTO extends BaseDTO
{
    public function __construct(

        public string  $fio,
        public string  $login,
        public int     $type,
        public ?bool    $isOnline = null,
        public ?Carbon $createdAt = null,
        public ?string $password = null,
        public ?int    $id = null,
    )
    {
    }

    /**
     * @param User $model
     * @return static
     */
    public static function fromModel($model): static
    {
        return new static(
            $model->id,
            $model->fio,
            $model->name,
            $model->type,
            true,
            $model->created_at,
            null
        );
    }
}
