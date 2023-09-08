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

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/user', function () {
    return view('admin.user');
});
Route::get('/re', function () {
    return view('admin.reservation');
});

Route::get('/login', function () {
    return view('login.login');
});
