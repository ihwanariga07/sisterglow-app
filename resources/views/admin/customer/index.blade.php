@extends('layouts.app')

@section('title', 'Data Customer')

@section('content')
<style>
    table td,
    table th {
        color: white !important;
    }
</style>

<div class="container-fluid">
    <h3>Data Customer</h3>

    <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">+ Tambah Customer</a>

    <table class="table table-bordered">
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
            @foreach ($customers as $i => $customer)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $customer->nama }}</td>
                <td>{{ $customer->no_hp }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    @if($customer->foto)
                        <img src="{{ asset('storage/' . $customer->foto) }}" alt="Foto" width="50">
                    @else
                        Tidak ada foto
                    @endif
                </td>
                <td>
                    <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection