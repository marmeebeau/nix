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
use App\Http\Controllers\Coordinator\ContactController;
use App\Http\Controllers\Coordinator\EventPackagesController;
use App\Http\Controllers\Coordinator\FeedbacksController;
use App\Http\Controllers\Coordinator\PdfController;
use App\Http\Controllers\Coordinator\ProfileController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

Route::prefix('coordinator')->middleware('guest:coordinator')->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('coordinator.register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])
                ->name('coordinator.login');

    Route::post('login', [LoginController::class, 'store']);

});

Route::prefix('coordinator')->middleware('auth:coordinator')->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });
    // Bookings
    Route::get('/booking', [BookingController::class, 'index'])->name('booking');
    Route::patch('/update-booking/{id}', [BookingController::class, 'update'])->name('update-booking');

    //Users
    Route::get('/clients', [ClientController::class, 'index'])->name('client');
    Route::get('/add-client', [ClientController::class, 'create'])->name('add-page');
    Route::post('/add-client', [ClientController::class, 'store'])->name('add-client');
    Route::get('/edit-client/{id}', [ClientController::class, 'edit'])->name('edit-client');
    Route::put('/update-client/{id}', [ClientController::class, 'update'])->name('update-client');
    Route::delete('/delete-client/{id}', [ClientController::class, 'destroy']);

    // Event Package
    Route::get('/event-packages', [EventPackagesController::class, 'index'])->name('event-packages.index');
    Route::get('/event-packages/create', [EventPackagesController::class, 'create'])->name('event-packages.create');
    Route::post('/event-packages', [EventPackagesController::class, 'store'])->name('event-packages.store');
    Route::get('/edit-event-packages/{id}', [EventPackagesController::class, 'edit'])->name('event-packages.edit');
    Route::put('/update-event-packages/{id}', [EventPackagesController::class, 'update'])->name('event-packages.update');
    Route::delete('/event-packages/{id}', [EventPackagesController::class, 'destroy'])->name('event-packages.destroy');

    // Feedback
    Route::get('/feedback', [FeedbacksController::class, 'index'])->name('feedback.index');
    Route::get('/feedback/create', [FeedbacksController::class, 'create'])->name('feedback.create');
    Route::post('/feedback', [FeedbacksController::class, 'store'])->name('feedback.store');
    Route::get('/edit-feedback/{id}', [FeedbacksController::class, 'edit'])->name('feedback.edit');
    Route::put('/update-feedback/{id}', [FeedbacksController::class, 'update'])->name('feedback.update');
    Route::delete('/feedback/{id}', [FeedbacksController::class, 'destroy'])->name('feedback.destroy');

    // Receipts
    Route::get('/receipt', [PdfController::class, 'index']);
    Route::get('/receipt-pdf/{id}', [PdfController::class, 'showReceiptDetails']);
    Route::get('/booking-receipt/{id}', [PdfController::class, 'generateReceiptDetails'])->name('booking.receipt');

    // Profile
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile-update/{id}', [ProfileController::class, 'update']);

    Route::post('logout', [LoginController::class, 'destroy'])
                ->name('coordinator.logout');
});
