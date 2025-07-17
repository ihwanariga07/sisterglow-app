
// resources/views/admin/costumer/edit.blade.php
@extends('layouts.app')

@section('title', 'Edit Costumer')

@section('content')
<div class="container-fluid">
    <h3>Edit Costumer</h3>

    <form action="{{ route('costumer.update', $costumer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control text-white" value="{{ $costumer->nama }}" required>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control text-white" value="{{ $costumer->no_hp }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control text-white" value="{{ $costumer->email }}">
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
            @if($costumer->foto)
                <img src="{{ asset('storage/' . $costumer->foto) }}" width="80" class="mt-2">
            @endif
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('costumer.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
