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
    Route::get('/countries/{id}/edit', 'edit')->name('editCountry');
    Route::put('/countries/{id}', 'update')->name('updateCountry');
    Route::put('/countries/{id}/changeStatus', 'changeStatus')->name('changeStatusCountry');
    Route::delete('/countries/{id}', 'destroy')->name('deleteCountry');
});

Route::controller(App\Http\Controllers\RegionController::class)->group(function () {
    Route::get('/regions', 'index')->name('regions');
    Route::get('/regions/create', 'create')->name('createRegion');
    Route::post('/regions', 'store');
    Route::get('/regions/{id}/edit', 'edit')->name('editRegion');
    Route::put('/regions/{id}', 'update')->name('updateRegion');
    Route::put('/regions/{id}/changeStatus', 'changeStatus')->name('changeStatusRegion');
    Route::delete('/regions/{id}', 'destroy')->name('deleteRegion');
});
