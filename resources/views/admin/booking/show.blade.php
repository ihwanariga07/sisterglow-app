@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Detail Booking</h4>
    <div class="card">
        <div class="card-body">
            <p><strong>Nama Customer:</strong> {{ $booking->customer->nama }}</p>
            <p><strong>No HP:</strong> {{ $booking->customer->no_hp }}</p>
            <p><strong>Email:</strong> {{ $booking->customer->email }}</p>
            <p><strong>Tanggal Booking:</strong> {{ $booking->booking_date }}</p>
            <p><strong>Jam Booking:</strong> {{ $booking->booking_time }}</p>
            <p><strong>Status:</strong> {{ $booking->status }}</p>
            <p><strong>Total Harga:</strong> Rp{{ number_format($booking->total_harga, 0, ',', '.') }}</p>

            <hr>
            <h5>Layanan yang dipilih:</h5>
            <ul>
                @foreach($booking->bookingDetails as $detail)
                    <li>{{ $detail->service->nama }} - Rp{{ number_format($detail->service->harga, 0, ',', '.') }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <a href="{{ route('booking.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
