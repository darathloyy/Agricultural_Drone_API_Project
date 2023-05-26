<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DroneController;
use App\Http\Controllers\MapController;
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
//route get farm with id===========================================================================
Route::get('/farm/{id}', [MapController::class,"farm"]);

// route resource api of maps====================================================================
Route::resource('maps', MapController::class);

// route get map by name of provice and farm id======================================================
Route::get('maps/{name}/{id}', [MapController::class, 'show']);

// route get maps by name of provice and farm id======================================================
Route::delete('maps/{name}/{id}', [MapController::class, 'deleteMap']);

// route delete maps by name of provice and farm id======================================================
Route::post('/login',[AuthenticationController::class, 'login']);

// route create register farm==========================================================================
Route::post('/register',[AuthenticationController::class, 'register']);
