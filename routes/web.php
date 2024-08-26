<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarRentalController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\ChauffeurBookingController;
use App\Http\Controllers\CarBookingController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelBookingController;
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

Route::get('/',[WelcomeController::class,'welcome'])->name('welcome');

Route::get('/items/search', [WelcomeController::class, 'search']);

Route::get('how-to-pay', function () {
    return view('pay');
});

Route::get('car_delivery',function(){
    return view('car_delivery');
});
Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::prefix('car_rental')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('show/{id}', [CarRentalController::class,'show'])->name('car_show');
        Route::get('form', [CarRentalController::class,'create'])->name('rental_create');
        Route::post('store', [CarRentalController::class,'store'])->name('rental_store');
        Route::get('lists', [CarRentalController::class,'lists'])->name('rental_lists');
        Route::get('status/{id}',[CarRentalController::class,'status'])->name('status');
    });
    Route::get('index', [CarRentalController::class,'index'])->name('rental_index');
    Route::get('details/{id}', [CarRentalController::class,'details'])->name('rental_details');

});
Route::prefix('chauffeur')->group(function () {
    Route::get('index',[ChauffeurController::class,'index'])->name('chauffeur_index');
    Route::get('details/{id}', [ChauffeurController::class,'details'])->name('chauffeur_details');
    Route::middleware(['auth'])->group(function () {
        Route::get('show/{id}', [ChauffeurController::class,'show'])->name('chauffeur_show');
        Route::get('form',[ChauffeurController::class,'create'])->name('chauffeur_create');
        Route::post('store',[ChauffeurController::class,'store'])->name('chauffeur_store');
        Route::get('list',[ChauffeurController::class,'list'])->name('chauffeur_list');
        Route::get('availability/{id}',[ChauffeurController::class,'availability'])->name('availability');
    });
});

Route::prefix('chauffeur_booking')->group(function(){
    Route::post('store',[ChauffeurBookingController::class,'store'])->name('chauffeur_book');
    Route::middleware(['auth'])->group(function () {
        Route::get('show/{id}', [ChauffeurBookingController::class,'show'])->name('chauffeurbook_show');
        Route::get('index', [ChauffeurBookingController::class,'index'])->name('chauffeurbook_index');
    });

});

Route::prefix('car_booking')->group(function(){
    Route::middleware(['auth'])->group(function () {
        Route::get('index', [CarBookingController::class,'index'])->name('carbook_index');
        Route::get('show/{id}', [CarBookingController::class,'show'])->name('carbook_show');
    });
    Route::post('store',[CarBookingController::class,'store'])->name('car_book');
});

Route::prefix('hotel_booking')->group(function(){
    Route::middleware(['auth'])->group(function () {
        Route::get('index', [HotelBookingController::class,'index'])->name('hotelbook_index');
        Route::get('show/{id}', [HotelBookingController::class,'show'])->name('hotelbook_show');
        Route::get('status/{id}',[HotelController::class,'status'])->name('hotel_book_status');

    });
    Route::post('store',[HotelBookingController::class,'store'])->name('hotel_book');
});

Route::prefix('hotels')->group(function(){
    Route::get('list', [HotelController::class,'show'])->name('hotel_show');
    Route::get('details/{id}', [HotelController::class,'details'])->name('hotel_details');

    Route::middleware(['auth'])->group(function () {
        Route::get('index', [HotelController::class,'index'])->name('hotel_index');
        Route::post('store',[HotelController::class,'store'])->name('hotel_store');
        Route::get('create',[HotelController::class,'create'])->name('hotel_create');

    });
});


Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});



Auth::routes();

Route::get('admin/users', [UserController::class,'index'])->name('users');
Route::get('dash_index', function () {
    return view('admin.index');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
