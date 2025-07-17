
// resources/views/admin/costumer/create.blade.php
@extends('layouts.app')

@section('title', 'Tambah Costumer')

@section('content')
<div class="container-fluid">
    <h3>Tambah Costumer</h3>

    <form action="{{ route('costumer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control text-white" required>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control text-white" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control text-white">
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('costumer.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

