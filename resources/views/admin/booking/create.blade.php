@extends('layouts.app')

@section('title', 'Tambah Booking')

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
    <h3>Tambah Booking</h3>

    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Customer</label>
            <select name="customer_id" class="form-control" required>
                <option value="">-- Pilih Customer --</option>
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal Booking</label>
            <input type="date" name="booking_date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Waktu Booking</label>
            <input type="time" name="booking_time" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Total Harga</label>
            <input type="number" name="total_harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="selesai">Selesai</option>
                <option value="batal">Batal</option>
            </select>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('booking.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
