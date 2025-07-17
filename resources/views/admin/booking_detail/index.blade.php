{{-- resources/views/admin/booking_detail/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Data Booking Detail')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Booking Detail</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('booking_detail.create') }}" class="btn btn-primary mb-3">Tambah Booking Detail</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Booking ID</th>
                <th>Layanan</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($details as $detail)
                <tr>
                    <td>{{ $detail->id }}</td>
                    <td>{{ $detail->booking->customer->nama ?? '-' }}</td>
                    <td>{{ $detail->booking->id }}</td>
                    <td>{{ $detail->layanan->nama_layanan }}</td>
                    <td>Rp {{ number_format($detail->harga) }}</td>
                    <td>{{ $detail->qty }}</td>
                    <td>Rp {{ number_format($detail->subtotal) }}</td>
                    <td>
                        <a href="{{ route('booking_detail.edit', $detail->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('booking_detail.destroy', $detail->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
