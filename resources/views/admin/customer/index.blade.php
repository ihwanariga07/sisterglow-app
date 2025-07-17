// resources/views/admin/costumer/index.blade.php
@extends('layouts.app')

@section('title', 'Data Costumer')

@section('content')
<div class="container-fluid">
    <h3>Data Costumer</h3>
    <a href="{{ route('costumer.create') }}" class="btn btn-primary mb-3">+ Tambah Costumer</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($costumers as $costumer)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $costumer->nama }}</td>
                    <td>{{ $costumer->no_hp }}</td>
                    <td>{{ $costumer->email }}</td>
                    <td>
                        @if($costumer->foto)
                            <img src="{{ asset('storage/' . $costumer->foto) }}" alt="Foto" width="60">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('costumer.edit', $costumer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('costumer.destroy', $costumer->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus costumer ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
