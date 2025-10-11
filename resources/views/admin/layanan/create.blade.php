@extends('layouts.app')

@section('title', 'Tambah Layanan')

@section('content')
<div class="container-fluid">
    <h3 class="text-white">Tambah Layanan</h3>
<!-- 
 jika tambah data berhasil -->
        @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                timer: 1000,
                timerProgressBar: true,
                showConfirmButton: false,
                toast: true,
                position: 'top-end'
            });
        </script>
    @endif


    <form action="{{ route('layanan.store') }}" method="POST" autocomplete="off">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label text-white">Nama Layanan</label>
            <input type="text" name="nama_layanan" class="form-control text-white bg-dark border-secondary"
                    value="{{ old('nama_layanan') }}" autocomplete="off">
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label text-white">Deskripsi</label>
            <textarea name="deskripsi" class="form-control text-white bg-dark border-secondary"
                     autocomplete="off">{{ old('deskripsi') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label text-white">Harga</label>
            <input type="number" name="harga" class="form-control text-white bg-dark border-secondary"
                   value="{{ old('harga') }}" autocomplete="off" required>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('layanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
