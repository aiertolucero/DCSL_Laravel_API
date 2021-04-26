<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonesController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['test_api'])->group(function () {
    Route::get('/phones', [PhonesController::class, 'getPhoneList']);
    Route::post('/phones', [PhonesController::class, 'uploadPhone']);
    Route::put('/phones/{id}', [PhonesController::class, 'updatePhone']);
    Route::delete('/phones/{id}', [PhonesController::class, 'deletePhone']);
});