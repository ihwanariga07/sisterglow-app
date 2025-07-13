<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return redirect('/login');
});


Auth::routes();

Route::get('/home', function () {
    return view('home');
});
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin', function () {
    return view('admin.dashboard');
});

