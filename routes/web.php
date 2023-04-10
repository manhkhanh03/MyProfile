<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
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


// Có 6 phương thức Route:
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);


Route::get('/', function () {
    //    return 'Hello World!!!';
    return view('welcome');
});

Route::get('profile/get', function() {
    $query = DB::select('SELECT * FROM myprofile');
    return $query;
});

Route::get('profile/add/{name}/{address}/{phone}', function($name, $address, $phone) {
    DB::insert('INSERT INTO myprofile (name, address, phone) VALUES (?, ?, ?)', [$name, $address, $phone]);
    return redirect('profile/home');
});

Route::get('profile/edit/{id}/{name}/{address}/{phone}', function($id, $name, $address, $phone) {
    DB::update('UPDATE myprofile SET name = ?, address = ?, phone = ? where id = ?', [$name, $address, $phone, $id]);
});

Route::get('profile/delete/{id}', function ($id) {
    DB::delete('DELETE FROM myprofile WHERE id = ?', [$id]);
    return 'Successfully';
});

Route::get('profile/home', 'QueryDatabaseProject@showHome');
Route::get('profile/home/{child}', 'QueryDatabaseProject@showHomeChild');
Route::get('profile/home/{child}/{id?}/{name?}/{address?}/{phone?}', 'QueryDatabaseProject@showHomeChildProfile');
