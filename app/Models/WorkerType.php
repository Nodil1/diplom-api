<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WorkerType
 *
 * @property int $id
 * @property int $id_worker
 * @property int $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerType query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerType whereIdWorker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WorkerType extends Model
{
    use HasFactory;
}
