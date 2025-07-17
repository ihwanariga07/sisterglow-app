@extends('layouts.app')

@section('title', 'Data Layanan')

@section('content')
<div class="container-fluid">
    <h3>Data Layanan</h3>
    <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3">+ Tambah Layanan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-dark table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Layanan</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($layanans as $layanan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $layanan->nama_layanan }}</td>
                    <td>{{ $layanan->deskripsi }}</td>
                    <td>Rp {{ number_format($layanan->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus layanan ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
