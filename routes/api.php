<?php

use Illuminate\Http\Request;

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

Route::get('trackings', 'Api\TrackingsController@create')->name('trackings.create');
// Route::post('trackings', 'Api\TrackingsController@store')->name('trackings.store');

Route::get('trackings/latitude={lat}&longitude={long}&speed={speed}&system={system_id}', 'Api\TrackingsController@store')->name('trackings.store');