@extends('layouts.app')

@section('title', 'Data Layanan')

@section('content')
<div class="container-fluid">
    <h3 class="mb-3 text-white">Data Layanan</h3>
    <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3">+ Tambah Layanan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-dark table-bordered table-hover text-center">
        <thead>
            <tr>
                <th class="text-white">No</th>
                <th class="text-white">Nama Layanan</th>
                <th class="text-white">Deskripsi</th>
                <th class="text-white">Harga</th>
                <th class="text-white">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($layanans as $layanan)
                <tr>
                    <td class="text-white">{{ $loop->iteration }}</td>
                    <td class="text-white">{{ $layanan->nama_layanan }}</td>
                    <td class="text-white">{{ $layanan->deskripsi }}</td>
                    <td class="text-white">Rp {{ number_format($layanan->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus layanan ini?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-white">Belum ada data layanan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
