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

// Route::get('/dashboard', function () {
//     return view('dashboard'); // Memanggil view dashboard.blade.php
// })->name('dashboard');

