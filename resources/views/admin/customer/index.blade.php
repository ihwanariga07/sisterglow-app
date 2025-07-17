@extends('layouts.app')

@section('title', 'Data Customer')

@section('content')
<div class="container-fluid">
    <h3>Data Customer</h3>
    <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">+ Tambah Customer</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-dark table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if($customer->foto)
                            <img src="{{ asset('storage/' . $customer->foto) }}" width="50" height="50">
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $customer->nama }}</td>
                    <td>{{ $customer->no_hp }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>
                        <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus customer ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
