<?php

use App\Http\Controllers\Coordinator\Auth\LoginController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Coordinator\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Coordinator\ClientController;
use App\Http\Controllers\Coordinator\BookingController;
use Illuminate\Support\Facades\Route;

Route::prefix('coordinator')->middleware('guest:coordinator')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('coordinator.register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])
                ->name('coordinator.login');

    Route::post('login', [LoginController::class, 'store']);

});

Route::prefix('coordinator')->middleware('auth:coordinator')->group(function () {
    // Bookings
    Route::get('/booking', [BookingController::class, 'index'])->name('booking');
    Route::patch('/update-booking/{id}', [BookingController::class, 'update'])->name('update-booking');

    //Users
    Route::get('/clients', [ClientController::class, 'index'])->name('client');
    Route::get('/add-client', [ClientController::class, 'create'])->name('add-page');
    Route::post('/add-client', [ClientController::class, 'store'])->name('add-client');
    Route::delete('/delete-client/{id}', [ClientController::class, 'destroy']);

    Route::post('logout', [LoginController::class, 'destroy'])
                ->name('coordinator.logout');
});
