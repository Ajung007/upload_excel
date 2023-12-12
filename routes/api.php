<?php

use App\Http\Controllers\Api\DataController;
use App\Http\Controllers\Api\DppspmController;
use App\Http\Controllers\Api\NewsletterController;
use App\Http\Controllers\Api\SipendarController;
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


Route::apiResource('/dttot', DataController::class);
Route::apiResource('/newsletter', NewsletterController::class);
Route::apiResource('/dppsmp', DppspmController::class);
Route::apiResource('/sipendar', SipendarController::class);