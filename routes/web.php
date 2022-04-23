<?php

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

Auth::routes();

Route::controller(App\Http\Controllers\HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'index')->name('home');
});

Route::controller(App\Http\Controllers\CountryController::class)->group(function () {
    Route::get('/countries', 'index')->name('countries');
    Route::get('/countries/create', 'create')->name('createCountry');
    Route::post('/countries', 'store');
    Route::get('/countries/{id}/edit', 'edit');
    Route::put('/countries/{id}', 'update');
    Route::delete('/countries/{id}', 'destroy');
    Route::get('/countries/{id}/changeStatus', 'changeStatus');
});

