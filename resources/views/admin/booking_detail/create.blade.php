{{-- resources/views/admin/booking_detail/create.blade.php --}}
@extends('layouts.app')

@section('title', 'Tambah Booking Detail')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Booking Detail</h1>

    <form action="{{ route('booking_detail.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="booking_id" class="form-label">Booking</label>
            <select name="booking_id" id="booking_id" class="form-control" required>
                @foreach ($bookings as $booking)
                    <option value="{{ $booking->id }}">Booking #{{ $booking->id }} - {{ $booking->booking_date }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="layanan_id" class="form-label">Layanan</label>
            <select name="layanan_id" id="layanan_id" class="form-control" required>
                @foreach ($layanans as $layanan)
                    <option value="{{ $layanan->id }}" data-harga="{{ $layanan->harga }}">
                        {{ $layanan->nama_layanan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" required readonly>
        </div>

        <div class="mb-3">
            <label for="qty" class="form-label">Qty</label>
            <input type="number" name="qty" id="qty" class="form-control" value="1" required>
        </div>

        <div class="mb-3">
            <label for="subtotal" class="form-label">Subtotal</label>
            <input type="number" name="subtotal" id="subtotal" class="form-control" readonly required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('booking_detail.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const layananSelect = document.getElementById('layanan_id');
        const hargaInput = document.getElementById('harga');
        const qtyInput = document.getElementById('qty');
        const subtotalInput = document.getElementById('subtotal');

        function updateSubtotal() {
            const harga = parseFloat(hargaInput.value) || 0;
            const qty = parseInt(qtyInput.value) || 0;
            subtotalInput.value = harga * qty;
        }

        layananSelect.addEventListener('change', function () {
            const selected = this.options[this.selectedIndex];
            const harga = selected.getAttribute('data-harga') || 0;
            hargaInput.value = harga;
            updateSubtotal();
        });

        qtyInput.addEventListener('input', updateSubtotal);

        // Inisialisasi di awal
        layananSelect.dispatchEvent(new Event('change'));
    });
</script>
@endpush
