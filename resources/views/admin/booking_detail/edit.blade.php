{{-- resources/views/admin/booking_detail/edit.blade.php --}}
@extends('layouts.app')

@section('title', 'Edit Booking Detail')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Booking Detail</h1>

    <form action="{{ route('booking_detail.update', $booking_detail->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="booking_id" class="form-label">Booking</label>
            <select name="booking_id" id="booking_id" class="form-control" required>
                @foreach ($bookings as $booking)
                    <option value="{{ $booking->id }}" {{ $booking->id == $booking_detail->booking_id ? 'selected' : '' }}>
                        Booking #{{ $booking->id }} - {{ $booking->booking_date }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="layanan_id" class="form-label">Layanan</label>
            <select name="layanan_id" id="layanan_id" class="form-control" required>
                @foreach ($layanans as $layanan)
                    <option value="{{ $layanan->id }}" {{ $layanan->id == $booking_detail->layanan_id ? 'selected' : '' }}>
                        {{ $layanan->nama_layanan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" value="{{ $booking_detail->harga }}" required>
        </div>

        <div class="mb-3">
            <label for="qty" class="form-label">Qty</label>
            <input type="number" name="qty" id="qty" class="form-control" value="{{ $booking_detail->qty }}" required>
        </div>

        <div class="mb-3">
            <label for="subtotal" class="form-label">Subtotal</label>
            <input type="number" name="subtotal" id="subtotal" class="form-control" value="{{ $booking_detail->subtotal }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('booking_detail.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
