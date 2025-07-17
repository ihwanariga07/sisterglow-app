<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\CostumerController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\BookingDetailController;
/* ---------- Akar ---------- */
Route::redirect('/', '/login');

/* ---------- Auth scaffold ---------- */
Auth::routes();

// Route::get('/cektemplate', function () {
//     return view('layouts.template');
// });

/* ---------- Area setelah login ---------- */
Route::middleware('auth')->group(function () {

    Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

Route::prefix('admin')->group(function () {
    Route::resource('layanan', LayananController::class);
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('customer', \App\Http\Controllers\Admin\CustomerController::class);
});

// Route Booking
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('booking', \App\Http\Controllers\Admin\BookingController::class);
});


// Route::prefix('admin')->group(function () {
//     Route::resource('booking_detail', \App\Http\Controllers\Admin\BookingDetailController::class);
// });

Route::get('/admin/booking_detail', [BookingDetailController::class, 'index'])->name('booking_detail.index');


// Route::prefix('admin')->middleware(['auth'])->group(function () {
//     Route::resource('booking', BookingController::class);
// });

// Route::prefix('admin')->middleware(['auth'])->group(function () {
//     Route::get('/booking', [BookingController::class, 'index'])->name('admin.booking.index');
// });

// Route::get('/booking', [BookingController::class, 'create']);
// Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

    });





