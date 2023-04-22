<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WorkerCar
 *
 * @property int $id
 * @property string $car_brand
 * @property string $car_model
 * @property string $car_number
 * @property string $fuel_rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\WorkerCarFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerCar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerCar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerCar query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerCar whereCarBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerCar whereCarModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerCar whereCarNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerCar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerCar whereFuelRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerCar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerCar whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WorkerCar extends Model
{
    use HasFactory;
}
