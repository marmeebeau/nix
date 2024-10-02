<?php

use App\Http\Controllers\Coordinator\ContactController;
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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/portfolio', function() {
    return view('portfolio');
});

Route::get('/booking', function() {
    return view('booking');
});

Route::get('/services', function() {
    return view('services');
});

// Contact
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/review', function() {
    return view('review');
});

Route::get('/go-back', function () {
    return redirect()->back();
})->name('go.back');


require __DIR__.'/auth.php';
require __DIR__.'/coordinator.php';
