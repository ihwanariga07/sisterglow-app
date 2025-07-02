<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Redirect default root ke login
Route::get('/', function () {
    return redirect('/login');
});

// Auth bawaan Laravel
Auth::routes();

// Halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Halaman home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
