<?php

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

Route::get('/', function () {
    // return view('auth.login');
    return redirect('login');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::post('/area', 'MapsController@area')->name('maps.area');

Route::resource('clients', 'ClientsController');
Route::resource('vehicles', 'VehiclesController');
Route::resource('records', 'RecordsController');
Route::resource('maps', 'MapsController');


