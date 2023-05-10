<?php

namespace App\DTO;

use App\Models\GeoPoint;
use Clickbar\Magellan\Data\Geometries\Point;

class GeoPointDTO extends BaseDTO
{
    public function __construct(
        public float  $latitude,
        public float  $longitude,
        public string $createdAt,
        public ?int   $idWorker,
        public ?int   $id
    )
    {
    }

    /**
     * @param GeoPoint $model
     * @return static
     */
    static public function fromModel($model): static
    {

        return new static(
            $model->location->latitude,
            $model->location->latitude,
            $model->created_at,
            $model->id_worker,
            $model->id
        );
    }
}
