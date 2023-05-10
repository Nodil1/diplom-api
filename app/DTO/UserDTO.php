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
        public ?bool   $isOnline = null,
        public ?string $createdAt = null,
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
            fio: $model->fio,
            login: $model->name,
            type: $model->type,
            isOnline: true,
            createdAt: $model->created_at,
            password: null,
            id: $model->id
        );
    }
}
