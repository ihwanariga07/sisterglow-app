@extends('layouts.app')

@section('title', 'Data Booking Detail')

@section('content')
<style>
    .container-fluid {
        background-color: #2c2c3a;
        padding: 20px;
        border-radius: 10px;
    }

    h3 {
        color: white;
    }

    .table-dark th,
    .table-dark td {
        color: white !important;
        vertical-align: middle;
    }

    .alert-success {
        background-color: #28a745;
        color: white;
        border: none;
    }

    img {
        border-radius: 50%;
        object-fit: cover;
    }
</style>

<div class="container-fluid">
    <h3 class="mb-4">Data Booking Detail</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>Foto</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Tanggal Booking</th>
                        <th>Jam Booking</th>
                        <th>Status</th>
                        <th>Nama Layanan</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bookingDetails as $detail)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $detail->booking->customer->nama ?? '-' }}</td>
                            <td>
                                @if(optional($detail->booking->customer)->foto)
                                    <img src="{{ asset('storage/' . $detail->booking->customer->foto) }}" alt="foto" width="50" height="50">
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>{{ $detail->booking->customer->no_hp ?? '-' }}</td>
                            <td>{{ $detail->booking->customer->email ?? '-' }}</td>
                            <td>{{ $detail->booking->booking_date ?? '-' }}</td>
                            <td>{{ $detail->booking->booking_time ?? '-' }}</td>
                            <td>{{ ucfirst($detail->booking->status) ?? '-' }}</td>
                            <td>{{ $detail->layanan->nama ?? '-' }}</td>
                            <td>Rp{{ number_format($detail->harga ?? 0, 0, ',', '.') }}</td>
                            <td>{{ $detail->jumlah ?? '-' }}</td>
                            <td>Rp{{ number_format($detail->subtotal ?? 0, 0, ',', '.') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12" class="text-center">Tidak ada data booking detail.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
