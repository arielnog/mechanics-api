<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', '\App\Http\Controllers\AuthController@login');

Route::prefix('v1')->group(function () {

    Route::prefix('vehicles')->group(function () {
        Route::get('/brand', '\App\Http\Controllers\VehicleController@listBrand');
        Route::get('/{brandId}/model', '\App\Http\Controllers\VehicleController@listModel');
    });

    Route::prefix('mechanic')->group(function () {
        Route::get('/{mechanicUuid}', '\App\Http\Controllers\MechanicController@findByUuid');
        Route::post('/save', '\App\Http\Controllers\MechanicController@save');
        Route::put('/{mechanicUuid}/update', '\App\Http\Controllers\MechanicController@update');

        Route::get('/{mechanicUuid}/clients', '\App\Http\Controllers\MechanicController@findByUuid');
    });

    Route::prefix('client')->group(function () {
        Route::get('/', '\App\Http\Controllers\ClientController@listWithVehicles');
        Route::get('/{clientUuid}', '\App\Http\Controllers\ClientController@save');
        Route::post('/save', '\App\Http\Controllers\ClientController@save');
        Route::put('/{clientUuid}/update', '\App\Http\Controllers\ClientController@update');
        Route::delete('/{clientUuid}/delete', '\App\Http\Controllers\ClientController@delete');

        Route::get('/{clientUuid}/vehicles', '\App\Http\Controllers\VehicleController@getVehiclesByClient');
    });

    Route::prefix('vehicles')->group(function () {
        Route::post('/save', '\App\Http\Controllers\VehicleController@save');
        Route::put('/{vehicleUuidd}/update', '\App\Http\Controllers\VehicleController@update');
        Route::delete('/{vehicleUuid}/delete', '\App\Http\Controllers\VehicleController@delete');
    });

    Route::prefix('service-order')->group(function () {
        Route::get('list/{vehicleId}/', '\App\Http\Controllers\OrderController@getByVehicleIdWithServices');
    });

    Route::prefix('service')->group(function () {
        Route::post('/{vehicleId}/save', '\App\Http\Controllers\ServiceController@save');
        Route::put('/{serviceUUId}/update', '\App\Http\Controllers\ServiceController@update');
        Route::delete('/{serviceUUId}/delete', '\App\Http\Controllers\ServiceController@delete');
    });
});
