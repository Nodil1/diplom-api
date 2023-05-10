<?php

namespace App\Http\Controllers;

use App\DTO\GeoPointDTO;
use App\Models\GeoPoint;
use App\Services\GeoPointService;
use Illuminate\Http\Request;

class GeoPointController extends Controller
{
    public function index()
    {
        return response()->json(GeoPointService::getAll());
    }

    public function store(Request $request)
    {
        $dto = GeoPointDTO::fromJson($request->getContent());
        $dto->idWorker = $request->user()->id;
        GeoPointService::create($dto);
    }

    public function show(GeoPoint $geoPoint)
    {
        $this->authorize('view', $geoPoint);

        return $geoPoint;
    }

    public function update(Request $request, GeoPoint $geoPoint)
    {
        $this->authorize('update', $geoPoint);

        $request->validate([

        ]);

        $geoPoint->update($request->validated());

        return $geoPoint;
    }

    public function destroy(GeoPoint $geoPoint)
    {
        $this->authorize('delete', $geoPoint);

        $geoPoint->delete();

        return response()->json();
    }
}
