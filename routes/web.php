<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

/* ---------- Akar ---------- */
Route::redirect('/', '/login');

/* ---------- Auth scaffold ---------- */
Auth::routes();

/* ---------- Area setelah login ---------- */
Route::middleware('auth')->group(function () {

    // Halaman Home (jika masih ingin dipakai)
    Route::view('/home', 'home')->name('home');

    // Semua URL admin diawali /admin
    Route::prefix('admin')->name('admin.')->group(function () {
        // Controller dashboard
        Route::get('/dashboard', [AdminController::class, 'dashboard'])
              ->name('dashboard');

        // Tambah route admin lain di sini…
    });
});
