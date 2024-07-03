<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rutas públicas
Route::get('/rooms', 'RoomController@index');
Route::get('/rooms/{room}', 'RoomController@show');

// Rutas que requieren autenticación de administrador
Route::group(['middleware' => 'auth.admin'], function () {
    Route::get('/rooms/create', 'RoomController@create');
    Route::post('/rooms', 'RoomController@store');

    Route::get('/reservations', 'ReservationController@index')->name('reservations.index');
    Route::get('/reservations/create', 'ReservationController@create')->name('reservations.create');
    Route::post('/reservations', 'ReservationController@store')->name('reservations.store');
    Route::get('/reservations/{id}/edit', 'ReservationController@edit')->name('reservations.edit');
    Route::put('/reservations/{id}', 'ReservationController@update')->name('reservations.update');
    Route::delete('/reservations/{id}', 'ReservationController@destroy')->name('reservations.destroy');
});