<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TaskType
 *
 * @property int $id
 * @property int $id_task
 * @property int $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TaskType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskType query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskType whereIdTask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TaskType extends Model
{
}
