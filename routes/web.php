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

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/', function () {
    return view('home');
});

<<<<<<< HEAD
Route::get('member', function () {
    return view('member.panel');
});

Route::get('officer', function () {
    return view('officer.panel');
});
<<<<<<< HEAD


=======
=======
// Matches The "/admin/dashboard" URL
Route::prefix('admin')->group(function () {
    Route::get('dashboard', 'AuthController@showDashboard');
    Route::get('adduser', 'AuthController@showAddUser');
});
>>>>>>> 1b9d0456ad6ae57cfdb0c4fa2ed4f01149cbb791
>>>>>>> pius254-master
