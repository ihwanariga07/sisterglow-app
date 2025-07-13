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


Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/cektemplate', function () {
    return view('layouts.template');
});

// Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// Route::get('admin', function () {
//     return view('admin.dashboard');
// });
//tanpa login
// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');

// Dashboard WAJIB login
// Route::middleware('auth')->get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');