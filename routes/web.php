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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'App\Http\Controllers\MenusController@index');*/

Route::get('/', 'App\Http\Controllers\MenusController@index');
Route::get('/agejo', 'App\Http\Controllers\MenusController@agejo');
Route::get('/tsuyome', 'App\Http\Controllers\MenusController@tsuyome');
Route::get('/ganguro', 'App\Http\Controllers\MenusController@ganguro');
Route::get('/himegal', 'App\Http\Controllers\MenusController@himegal');
