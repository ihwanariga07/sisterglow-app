@extends('layouts.app')

@section('title', 'Edit Booking')

@section('content')
<style>
    .form-control, .form-select {
        background-color: #1e1e2d !important; /* Warna gelap */
        color: white !important;             /* Teks putih */
        border-color: #444 !important;
    }
    label {
        color: white;
    }
</style>

<div class="container-fluid">
    <h3>Edit Booking</h3>

    <form action="{{ route('booking.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Customer</label>
            <select name="customer_id" class="form-control" required>
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $booking->customer_id == $customer->id ? 'selected' : '' }}>
                        {{ $customer->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Booking</label>
            <input type="date" name="booking_date" class="form-control" value="{{ $booking->booking_date }}" required>
        </div>
        <div class="mb-3">
            <label>Waktu Booking</label>
            <input type="time" name="booking_time" class="form-control" value="{{ $booking->booking_time }}" required>
        </div>
        <div class="mb-3">
            <label>Total Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $booking->harga }}" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="selesai" {{ $booking->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                <option value="batal" {{ $booking->status == 'batal' ? 'selected' : '' }}>Batal</option>
            </select>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('booking.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
