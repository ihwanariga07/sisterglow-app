@extends('layouts.app')

@section('title', 'Data Booking')

@section('content')
<div class="container-fluid">
    <h3>Data Booking</h3>
    <a href="{{ route('booking.create') }}" class="btn btn-primary mb-3">+ Tambah Booking</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Tanggal Booking</th>
                <th>Waktu Booking</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $booking->customer->nama }}</td>
                <td>{{ $booking->booking_date }}</td>
                <td>{{ $booking->booking_time }}</td>
                <td>Rp {{ number_format($booking->total_harga, 0, ',', '.') }}</td>
                <td>{{ ucfirst($booking->status) }}</td>
                <td>
                    <a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('booking.destroy', $booking->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus booking ini?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
