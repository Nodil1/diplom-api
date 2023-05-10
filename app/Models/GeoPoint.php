<?php

namespace App\Models;

use Clickbar\Magellan\Data\Geometries\Point;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GeoPoint
 *
 * @property int $id
 * @property int $id_worker
 * @property Point $location
 * @property \Illuminate\Support\Carbon $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|GeoPoint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeoPoint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeoPoint query()
 * @method static \Illuminate\Database\Eloquent\Builder|GeoPoint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeoPoint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeoPoint whereIdWorker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeoPoint whereLocation($value)
 * @mixin \Eloquent
 */
class GeoPoint extends Model
{
    public $timestamps = false;
}
