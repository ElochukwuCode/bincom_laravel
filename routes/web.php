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



Route::post('/lga/poll_count', 'App\Http\Controllers\LgaController@lgaDetails_post');
Route::get('/polling_units', 'App\Http\Controllers\LgaController@pollingUnits_get');

Route::get('/lga', 'App\Http\Controllers\LgaController@lgas_get');
Route::get('/', 'App\Http\Controllers\LgaController@index');
Route::get('/new_poll', 'App\Http\Controllers\LgaController@store_results_get');
Route::post('/new_poll', 'App\Http\Controllers\LgaController@store_results_post');



