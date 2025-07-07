<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Redirect default root ke login
Route::get('/', function () {
    return redirect('/login');
});

// Auth bawaan Laravel
Auth::routes();





Route::get('/home', function () {
    return view('home');
});

Route::get('/cektemplate', function () {
    return view('layouts.template');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/layanan', function () {
    return view('data.layanan');
});


//Data Costumer
Route::get('/costumer', [costumerController::class, 'index']);
Route::get('/costumer/tambah', [costumerController::class, 'create']);
Route::post('/costumer', [costumerController::class, 'store']);
Route::get('/costumer/edit/{id}', [costumerController::class, 'edit']);
Route::put('/costumer/{id}', [dcostumerController::class, 'update']);
Route::delete('/costumer/{id}', [costumerController::class, 'destroy']);

