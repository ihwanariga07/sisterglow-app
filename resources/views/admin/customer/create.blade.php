<!-- resources/views/admin/customer/create.blade.php -->
@extends('layouts.app')

@section('title', 'Tambah Customer')

@section('content')
<style>
    .form-control {
        color: white !important;
        background-color: #343a40 !important; /* Biar selaras dengan tema gelap */
    }
    label, h3 {
        color: white;
    }
</style>

<div class="container-fluid">
    <h3>Tambah Customer</h3>

    <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('customer.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
