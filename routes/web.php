<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ResturantController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminResturantController;
use App\Http\Controllers\AdminReservationController;
use App\Http\Controllers\profileController;
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

Route::get('/main', function () {
    return view('home.main');
});

//  Admin Panel /////
Route::get('/admin/layout', function () {
    return view('admin.layout');
});
Route::resource("Admin", AdminController::class);
Route::resource("User", AdminUserController::class);
Route::resource("Restaurant", AdminResturantController::class);
Route::resource("Reservation", AdminReservationController::class);
////////////////////



Route::get('/about', function () {
    return view('home.about');
});
Route::get('/contact', function () {
    return view('home.contact');
});


Route::get('/login', function () {
    return view('home.login.login');
});

Route::get('/show', function () {
    return view('home.show');
});


Route::get('/a', function () {
    return view('admin.About');
});

Route::get('/master', function () {
    return view('home.masterpage');
});



Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});



Route::controller(CategoryController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/subcat', 'show')->name('subcat');
});

Route::controller(ResturantController::class)->group(function() {
Route::get('/resturants','Page' )->name('Page');
});

Route::get("/resdetail/{id}",[ResturantController::class,'Pagedetail']);

Route::get("/bookdet/{id}",[ReservationController::class,'index'])->name('det');


Route::resource('user', profileController::class);
Route::post('edit', [profileController::class,'edit'])->name('edit');
Route::get('user/{id}', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/categories', [ResturantController::class,'index']);
Route::get("/book/{restaurantName}",[ReservationController::class,'showBookingForm'])->name('showBookingForm');
Route::post('/reservation', [ReservationController::class,'store'])->name('reservation.store');
Route::get("/user/index/{id}",[ReservationController::class,'getUserReservations']);

    Route::get('/user/index', [ReservationController::class, 'getUserReservations']);
    // Route::put('/reservation/{id}', 'ReservationController@update')->name('reservation.update');
    // Route::get('reservation/{id}', [ReservationController::class,'update']);
    Route::put('/reservations/{id}', [ReservationController::class,'update'])->name('reservation.update');
