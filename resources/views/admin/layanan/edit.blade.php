@extends('layouts.app')

@section('title', 'Edit Layanan')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4 text-white">Edit Layanan</h3>

    <form action="{{ route('layanan.update', $layanan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label text-white">Nama Layanan</label>
            <input type="text" name="nama_layanan" 
                   class="form-control text-white bg-dark border-secondary" 
                   value="{{ $layanan->nama_layanan }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label text-white">Deskripsi</label>
            <textarea name="deskripsi" 
                      class="form-control text-white bg-dark border-secondary" 
                      rows="4">{{ $layanan->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label text-white">Harga</label>
            <input type="number" name="harga" 
                   class="form-control text-white bg-dark border-secondary" 
                   value="{{ $layanan->harga }}" required>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('layanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
