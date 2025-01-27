<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PsgcController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->middleware(['auth', 'verified'])->name('home');
//user route
Route::get('/u', 'UserController@dashboard')->middleware(['auth', 'verified', 'role:user'])->name('user.dashboard');

//admin route
Route::get('/a', 'AdminController@dashboard')->middleware(['auth', 'verified', 'role:admin'])->name('admin.dashboard');
Route::get('/a/patients', 'AdminController@index')->middleware('auth', 'verified', 'role:admin')->name('admin.patients');

//verified email middleware
Route::group(['middleware' => ['verified.email']], function () {
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
});

Route::get('/psgc/provinces', [PsgcController::class, 'showProvinces']);

