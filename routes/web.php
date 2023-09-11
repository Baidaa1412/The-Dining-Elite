<?php
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ResturantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRoutingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminResturantController;

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
Route::resource("/admin-layout", AdminController::class);
Route::resource("/admin-layout", AdminUserController::class);
Route::resource("/admin-layout", AdminResturantController::class);

// Route::resource("/admin-layout", AdminRoutingController::class);

Route::get('/admin-layout', function () {
    return view ('admin.layout');
});

Route::get('/admin-admin', function () {
    return view ('admin.sidebar.admin');
});

Route::get('/admin-user', function () {
    return view ('admin.sidebar.user');
});

Route::get('/admin-category', function () {
    return view ('admin.sidebar.category');
});

Route::get('/admin-reservation', function () {
    return view ('admin.sidebar.reservation');
});

Route::get('/admin-restaurant', function () {
    return view ('admin.sidebar.restaurant');
});

Route::get('/admin-dashboard', function () {
    return view ('admin.sidebar.dashboard');
});

////////////////////////////////////

Route::get('/admin-edit-admin', function () {
    return view ('admin.edit.admin');
});

Route::get('/admin-edit-user', function () {
    return view ('admin.edit.user');
});

Route::get('/admin-edit-category', function () {
    return view ('admin.edit.category');
});

Route::get('/admin-edit-reservation', function () {
    return view ('admin.edit.reservation');
});

Route::get('/admin-edit-restaurant', function () {
    return view ('admin.edit.restaurant');
});

////////////////////////////////////

Route::get('/admin-add-admin', function () {
    return view ('admin.add.admin');
});

Route::get('/admin-add-user', function () {
    return view ('admin.add.user');
});

Route::get('/admin-add-category', function () {
    return view ('admin.add.category');
});

Route::get('/admin-add-reservation', function () {
    return view ('admin.add.reservation');
});

Route::get('/admin-add-restaurant', function () {
    return view ('admin.add.restaurant');
});

/////////////////////////////////


Route::get('/about', function () {
    return view('home.about');
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


Route::resource("/reservation", ReservationController::class);
// Route::resource("/categories", CategoryController::class);


Route::controller(CategoryController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/subcat', 'show')->name('subcat');
});

Route::controller(ResturantController::class)->group(function() {
Route::get('/book','showSecondPage')->name('showSecondPage');
Route::get('/resturants','Page' )->name('Page');
});

Route::get("/resdetail/{id}",[ResturantController::class,'Pagedetail']);
Route::get("/bookdet/{id}",[ReservationController::class,'index'])->name('det');;

