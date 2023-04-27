<?php

use App\Http\Controllers\TaskController;
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
Route::resource('task', TaskController::class);

Route::middleware('auth:sanctum')->group(function () {

});

