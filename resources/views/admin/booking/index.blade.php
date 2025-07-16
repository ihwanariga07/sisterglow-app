@extends('layouts.app')

@section('title', 'Data Booking')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header"><h5>Data Booking</h5></div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Customer</th>
                        <th>Layanan</th>
                        <th>Tanggal Booking</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $booking->costumer->nama }}</td>
                        <td>{{ $booking->layanan->nama }}</td>
                        <td>{{ $booking->tanggal_booking }}</td>
                        <td>{{ $booking->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
