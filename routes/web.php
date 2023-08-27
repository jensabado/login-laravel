<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home')->name('homepage');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function() {
        Route::view('/login', 'admin.login')->name('login');
        Route::post('/login', [AdminController::class, 'login_submit'])->name('login.submit');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function() {
        Route::view('/home', 'admin.home')->name('home');
        Route::post('/logout', [AdminController::class, 'logout_submit'])->name('logout.submit');
    });
});
