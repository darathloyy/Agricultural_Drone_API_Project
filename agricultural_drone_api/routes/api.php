<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DroneController;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\PlanController;
use App\Http\Resources\PlanResource;
use App\Models\Instruction;
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
Route::middleware('auth:sanctum')->group( function () {
    Route::post('/logout',[AuthenticationController::class, 'logout']);
});

Route::post('/login',[AuthenticationController::class, 'login']);
Route::post('/register',[AuthenticationController::class, 'register']);

Route::resource('drones',DroneController::class);
Route::resource('instructions',InstructionController::class);

Route::get('drone/{id}',[DroneController::class,'getDroneLocation']);
Route::get('plan/{name}',[PlanController::class,'getPlanDetail']);
Route::put('drones/{id}',[InstructionController::class,'update']);


