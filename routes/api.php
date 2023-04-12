<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Api get
Route::get('profile', 'Api\ProfileController@index')->name('profile.index');
Route::get('profile/{id}', 'Api\ProfileController@show')->name('profile.show');
Route::post('profile', 'Api\ProfileController@store')->name('profile.store');
Route::put('profile/{id}', 'Api\ProfileController@update')->name('profile.update');
Route::delete('profile/{id}', 'Api\ProfileController@destroy')->name('profile.destroy');