<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ToursController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/tour/{tour}', [ToursController::class, 'show'])->name('tour.show');
Route::get('/tour/booking/{tour}', [ToursController::class, 'booking'])->name('tour.booking');
Route::post('tour/booking/payment', [ToursController::class, 'payment'])->name('tour.booking.payment');
Route::post('tour/booking/create', [ToursController::class, 'create'])->name('tour.booking.create');

require __DIR__.'/auth.php';
