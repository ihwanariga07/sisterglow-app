@extends('layouts.app')

@section('title', 'Tambah Booking Detail')

@section('content')
<style>
    /* Custom styles for the form */
    .form-control {
        background-color: #1e1e2d;
        color: white;
        border: 1px solid #444;
    }

    .form-control:focus {
        background-color: #1e1e2d;
        color: white; 
    }

    .form-control[readonly] {
        background-color: #1e1e2d;
        color: white !important;
    }

    label, h1 {
        color: white;
    }

    .container {
        background-color: #2c2c3a;
        padding: 20px;
        border-radius: 10px;
    }

    .btn {
        margin: 2px;
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Example hover color */
    }
</style>

<div class="container">
    <h1 class="mb-4">Tambah Booking Detail</h1>

    <form id="bookingDetailForm" action="{{ route('booking_detail.store') }}" method="POST">
        @csrf

        {{-- Booking --}}
        <div class="mb-3">
            <label for="booking_id" class="form-label">Booking</label>
            <select name="booking_id" id="booking_id" class="form-control" required>
                @foreach ($bookings as $booking)
                    <option value="{{ $booking->id }}" data-harga="{{ $booking->total_harga }}">
                        Booking #{{ $booking->id }} - {{ $booking->booking_date }} (Rp {{ number_format($booking->total_harga, 0, ',', '.') }})
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Display Harga from Booking --}}
        <div class="mb-3">
            <label for="display_harga" class="form-label">Harga</label>
            <input type="text" id="display_harga" class="form-control" readonly 
                   value="Rp {{ number_format($bookings[0]->total_harga, 0, ',', '.') }}">
            <input type="hidden" name="harga" id="harga" value="{{ $bookings[0]->total_harga }}">
        </div>

        {{-- Qty --}}
        <div class="mb-3">
            <label for="qty" class="form-label">Qty</label>
            <input type="number" name="qty" id="qty" class="form-control" value="1" min="1" required>
        </div>

        {{-- Subtotal --}}
        <div class="mb-3">
            <label for="subtotal" class="form-label">Subtotal</label>
            <input type="text" name="subtotal" id="subtotal" class="form-control" readonly
                   value="Rp {{ number_format($bookings[0]->total_harga, 0, ',', '.') }}">
            <input type="hidden" id="subtotal_raw" name="subtotal" value="{{ $bookings[0]->total_harga }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('booking_detail.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const bookingSelect = document.getElementById('booking_id');
        const displayHarga = document.getElementById('display_harga');
        const hargaInput = document.getElementById('harga');
        const qtyInput = document.getElementById('qty');
        const subtotalInput = document.getElementById('subtotal');
        const subtotalRaw = document.getElementById('subtotal_raw');

        function formatRupiah(angka) {
            return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function updateHargaDanSubtotal() {
            const selectedBooking = bookingSelect.options[bookingSelect.selectedIndex];
            const harga = Number(selectedBooking.getAttribute('data-harga')) || 0;
            const qty = Number(qtyInput.value) || 1;
            const subtotal = harga * qty;

            // Update display values
            displayHarga.value = formatRupiah(harga);
            hargaInput.value = harga;
            subtotalInput.value = formatRupiah(subtotal);
            subtotalRaw.value = subtotal;
        }

        bookingSelect.addEventListener('change', updateHargaDanSubtotal);
        qtyInput.addEventListener('input', updateHargaDanSubtotal);

        // Initial update
        updateHargaDanSubtotal();

        // Confirm before submitting form
        const form = document.getElementById('bookingDetailForm');
        form.addEventListener('submit', function (event) {
            if (!confirm("Apakah Anda yakin ingin menyimpan booking detail ini?")) {
                event.preventDefault();
            }
        });
    });
</script>
@endpush