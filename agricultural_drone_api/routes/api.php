<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DroneController;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\PlanController;
use App\Http\Resources\PlanResource;
use App\Models\Instruction;
use App\Http\Controllers\MapController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthenticationController::class, 'logout']);
    Route::resource('drones', DroneController::class);
    Route::get('drone/{id}', [DroneController::class, 'getDroneLocation']);
    Route::put('drones/{id}', [InstructionController::class, 'update']);
    //route get farm with id===========================================================================
    Route::get('/farm/{id}', [MapController::class, "farm"]);
    // route resource api of maps====================================================================
    Route::resource('maps', MapController::class);
    // route get map by name of provice and farm id======================================================
    Route::get('maps/{name}/{id}', [MapController::class, 'show']);
    // route delete maps by name of provice and farm id======================================================
    Route::delete('maps/{name}/{id}', [MapController::class, 'deleteMap']);
    // route create newly map by name of provice and farm id======================================================
    Route::post('maps/{name}/{id}', [MapController::class, 'store']);
});
Route::post('/login', [AuthenticationController::class, 'login']);
Route::resource('plans', PlanController::class);
Route::resource('instructions', InstructionController::class);
// route create register farm==========================================================================
Route::post('/register', [AuthenticationController::class, 'register']);
