<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Worker
 *
 * @property int $id
 * @property string $phone_number
 * @property int|null $id_car
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\WorkerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Worker newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Worker newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Worker query()
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereIdCar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Worker extends Model
{
    use HasFactory;

    /**
     * @return Collection<WorkerType
     */
    public function types(): Collection{
        return WorkerType::where('id_worker', $this->id)->get();
    }
}
