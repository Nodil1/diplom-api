<?php

namespace App\DTO;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

/**
 * @template T of Model
 */
abstract class BaseDTO
{
    /**
     * @param T $model
     * @return static
     */
    abstract static public function fromModel($model): static;

    /**
     * @param Collection<Model> $collection
     * @return Collection<static>
     */
    public static function convertCollection(Collection $collection): Collection
    {
        return  $collection->map(function ($model){
            return static::fromModel($model);
        });
    }

    /**
     * @param Request $request
     * @return static
     */
    public static function fromRequest(Request $request): static
    {

        return new static();
    }
}
