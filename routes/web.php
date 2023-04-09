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

// Không tham số
Route::get('home/{name}', 'HomeControllers@showwellcome');
// Route::get('/', [HomeControllers::class, 'showwellcome']);

// Có tham số
Route::get('home/{param}/{param2}', 'HomeControllers@logger');

// cha
Route::get('about', function () {
    return 'Manh Khanh đệp trai';
});


// Con
Route::get('about/directions', function () {
    return 'Manh Khanh cực kỳ đệp trai';
});

Route::any('test-any', function () {
    return 'Test any';
});

// truyền tham số cho Route
Route::get('test-param/{param}/{param2}', function (...$param) {
    return $param[0] . ' use parameter ' . $param[1];
});

Route::get('test-param/{param}', function ($param) {
    return $param . ': use redirect ';
});

// Chuyển hướng url - Ủy quyền sang url khác
Route::get('test-redirect', function () {
    return redirect('test-param/manhkhanh');
});

Route::get('profile/get', function() {
    $query = DB::select('select * from profile');
    return $query;
});

Route::get('profile/add/{name}/{address}/{phone}', function($name, $address, $phone) {
    DB::insert('INSERT INTO profile (Name, Address, Phone) values (?, ?, ?)', [$name, $address, $phone]);
    return redirect('profile/home');
});

Route::get('profile/edit/{id}/{name}/{address}/{phone}', function($id, $name, $address, $phone) {
    DB::update('UPDATE profile set Name = ?, Address = ?, Phone = ? where ID = ?', [$name, $address, $phone, $id]);
});

Route::get('profile/delete/{id}', function ($id) {
    DB::delete('DELETE FROM profile WHERE ID = ?', [$id]);
    return 'Successfully';
});

Route::get('profile/home', 'QueryDatabaseProject@showHome');
Route::get('profile/home/{child}', 'QueryDatabaseProject@showHomeChild');
Route::get('profile/home/{child}/{id?}/{name?}/{address?}/{phone?}', 'QueryDatabaseProject@showHomeChildProfile');


Route::post('/profile', function(Request $request) {
    $name = $request->input('name');
    $address = $request->input('address');
    $phone = $request->input('phone');

    DB::table('profile')->insert([
        'Name' => $name,
        'Address' => $address,
        'Phone' => $phone,
    ]);

    return response()->json(['message' => 'User added successfully'], 200);
});

// Route::put('project/edit/{name}/{address}/{phone}', function ($name, $address, $phone) {
//     $update = DB::update('UPDATE profile set Name = ?,  Address = ?, Phone = ?', [$name, $address, $phone]);
//     return $update;
// });