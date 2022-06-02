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

Route::middleware(['auth'])->get('/', function () {
    return inertia('home');
});


Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return inertia('home');
    })->name('home');
});



Route::middleware(['guest'])
    ->controller('AuthController')
    ->prefix('auth')->group(function () {

        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'doLogin')->name('do-login');

        Route::get('/logout', 'logout')
            ->withoutMiddleware('guest')
            ->middleware('auth')
            ->name('logout');
    });



Route::middleware(['auth'])->prefix('data-master')->group(function () {

    Route::resource('customer', 'CustomerController');
});
