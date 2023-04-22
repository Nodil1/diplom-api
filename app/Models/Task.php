<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Task
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $address
 * @property string $customer
 * @property int $task_type
 * @property float $latitude
 * @property float $longitude
 * @property int $state
 * @property string $expired_at
 * @property string|null $finished_at
 * @property int|null $id_worker
 * @property int|null $id_parent_task
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TaskFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task query()
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereExpiredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereFinishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereIdParentTask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereIdWorker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Task extends Model
{
    use HasFactory;
}
