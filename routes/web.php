<?php

use App\Http\Controllers\GudangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\Owner\UserController;
use Illuminate\Support\Facades\Auth;
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

// Welcome Route
Route::get('/', function () {
    return view('welcome');
});

// Login Authentikasi
Auth::routes();

// Group Route untuk user yang sudah terauthentikasi
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Mengontroll route untuk Owner
    Route::middleware(['owner'])->group(function () {
        Route::get('owner/dashboard', [OwnerController::class, 'index'])->name('index');
        Route::resource('owner/user', UserController::class);
    });

    // Mengontroll Route untuk Kasir
    Route::middleware(['kasir'])->group(function () {
        Route::get('kasir/dashboard', [KasirController::class, 'index'])->name('index');
    });

    // Mengontroll Route untuk Gudang
    Route::middleware(['gudang'])->group(function () {
        Route::get('gudang/dashboard', [GudangController::class, 'index'])->name('index');
    });

    Route::get('logout', [HomeController::class,'logout'])->name('logout');
});
