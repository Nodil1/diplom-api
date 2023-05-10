<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WorkerAction
 *
 * @property int $id
 * @property int $type
 * @property int|null $id_task
 * @property string $id_worker
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerAction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerAction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerAction query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerAction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerAction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerAction whereIdTask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerAction whereIdWorker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerAction whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkerAction whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WorkerAction extends Model
{
}
