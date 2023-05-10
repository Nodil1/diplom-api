<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GeoPointController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WorkerActionController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('worker', WorkerController::class);

Route::get('auth', [AuthController::class, "login"],);


Route::middleware('auth:sanctum')->group(function () {
    Route::get('task/myTasks', [TaskController::class, "workerTasks"],);
    Route::resource('geo', GeoPointController::class);
    Route::resource('workerAction', WorkerActionController::class);

});
Route::resource('task', TaskController::class);

