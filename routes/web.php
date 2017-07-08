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

Route::get('member', function () {
    return view('member.panel');
});

Route::get('officer', function () {
    return view('officer.panel');
});

Route::get('administrator', function () {
    return view('administrator.panel');
});

Route::get('faq', function () {
    return view('faq');
});