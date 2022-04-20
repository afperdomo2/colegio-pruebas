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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/countries', [App\Http\Controllers\CountryController::class, 'index'])->name('countries');
Route::get('/countries/create', [App\Http\Controllers\CountryController::class, 'create'])->name('createCountry');
Route::post('/countries', [App\Http\Controllers\CountryController::class, 'store']);
Route::get('/countries/{id}/edit', [App\Http\Controllers\CountryController::class, 'edit']);
Route::put('/countries/{id}', [App\Http\Controllers\CountryController::class, 'update']);
Route::delete('/countries/{id}', [App\Http\Controllers\CountryController::class, 'destroy']);
Route::get('/countries/{id}/changeStatus', [App\Http\Controllers\CountryController::class, 'changeStatus']);

