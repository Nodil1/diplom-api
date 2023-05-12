<?php

use App\Http\TestSingle;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
    $single = App::make(TestSingle::class);
    $single->incrementServer();
    return view('welcome');
});
Route::get('/test', function (Request $request) {
    $taskDTO = \App\DTO\TaskDTO::fromModel(\App\Models\Task::where("id_worker",1)->first());
    \App\Events\TaskAssignToWorkerEvent::dispatch($taskDTO);
    return response()->json($taskDTO);
});
