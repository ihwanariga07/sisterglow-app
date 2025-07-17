<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LayananController;

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















// Route::prefix('admin')->middleware(['auth'])->group(function () {
//     Route::resource('booking', BookingController::class);
// });

// Route::prefix('admin')->middleware(['auth'])->group(function () {
//     Route::get('/booking', [BookingController::class, 'index'])->name('admin.booking.index');
// });

// Route::get('/booking', [BookingController::class, 'create']);
// Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

    });





