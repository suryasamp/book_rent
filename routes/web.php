<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentLogController;
use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('dashboard', DashboardController::class);
    Route::get('logout', [AuthController::class, 'logout']);
    Route::resource('book', BookController::class);
    Route::resource('categories', CategoriesController::class);
    Route::get('rentLog', [RentLogController::class, 'index']);
    Route::get('user', [UserController::class, 'index'])->middleware('OnlyAdmin');
    Route::get('profile', [ProfileController::class, 'index']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticated']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerStore']);
});
