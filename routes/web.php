<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/login');
});


Auth::routes();


Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


Route::get('/admin', function () {
    return view('admin.dashboard');
});



Route::get('/home', function () {
    return view('home');
});

