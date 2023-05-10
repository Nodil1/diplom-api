<?php

namespace App\Policies;

use App\Models\GeoPoint;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GeoPointPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, GeoPoint $geoPoint): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, GeoPoint $geoPoint): bool
    {
    }

    public function delete(User $user, GeoPoint $geoPoint): bool
    {
    }

    public function restore(User $user, GeoPoint $geoPoint): bool
    {
    }

    public function forceDelete(User $user, GeoPoint $geoPoint): bool
    {
    }
}
