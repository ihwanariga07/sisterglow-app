<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BookingController;

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

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/booking', [BookingController::class, 'index'])->name('admin.booking.index');
});







// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
// });

    });
