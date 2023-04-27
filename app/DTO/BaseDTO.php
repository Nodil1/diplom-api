<?php

namespace App\DTO;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use OpenSerializer\JsonObject;
use OpenSerializer\JsonSerializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

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


    public static function fromJson($json): static | \stdClass
    {
        $serializer = new JsonSerializer();

        return $serializer->deserialize(static::class, JsonObject::fromJsonString($json));
    }

}
