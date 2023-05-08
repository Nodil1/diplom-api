<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TaskState
 *
 * @property int $id
 * @property int $id_task
 * @property int $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TaskState newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskState newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskState query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskState whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskState whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskState whereIdTask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskState whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskState whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TaskState extends Model
{
}
