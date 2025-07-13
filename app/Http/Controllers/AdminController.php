<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Tambahkan middleware (opsional)
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);   // ganti 'is_admin' sesuai middleware kamu
    }

    /**
     * Halaman dashboard admin
     */
    public function dashboard()
    {
        // Contoh data dinamis (opsional)
        // $totalUsers = User::count();
        // return view('admin.dashboard', compact('totalUsers'));

        return view('admin.dashboard');
    }
}
