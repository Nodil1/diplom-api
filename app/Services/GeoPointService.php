<?php

namespace App\Services;

use App\DTO\GeoPointDTO;
use App\Models\GeoPoint;
use Clickbar\Magellan\Data\Geometries\Point;
use Illuminate\Support\Collection;

class GeoPointService
{
    public static function getAll(): Collection
    {
        return GeoPointDTO::convertCollection(GeoPoint::all());
    }
    public static function create(GeoPointDTO $DTO): void
    {
        $model = new GeoPoint();
        $model->id_worker = $DTO->idWorker;
        $model->location = Point::make($DTO->latitude, $DTO->longitude) ;
        $model->created_at = $DTO->createdAt;
        $model->save();
    }
}
