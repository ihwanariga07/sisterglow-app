<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('customer')->latest()->get();
        return view('admin.booking.index', compact('bookings'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('admin.booking.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id'   => 'required|exists:customers,id',
            'booking_date'  => 'required|date',
            'booking_time'  => 'required',
            'total_harga'   => 'required|numeric|min:0',
            'status'        => 'required|string',
        ]);

        Booking::create([
            'customer_id'   => $request->customer_id,
            'booking_date'  => $request->booking_date,
            'booking_time'  => $request->booking_time,
            'total_harga'   => $request->total_harga,
            'status'        => $request->status,
        ]);

        return redirect()->route('booking.index')->with('success', 'Booking berhasil ditambahkan.');
    }

    public function show(Booking $booking)
    {
        $booking->load(['customer', 'bookingDetails.service']); // pastikan relasi ini ada di model
        return view('admin.booking.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $customers = Customer::all();
        return view('admin.booking.edit', compact('booking', 'customers'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'customer_id'   => 'required|exists:customers,id',
            'booking_date'  => 'required|date',
            'booking_time'  => 'required',
            'total_harga'   => 'required|numeric|min:0',
            'status'        => 'required|string',
        ]);

        $booking->update([
            'customer_id'   => $request->customer_id,
            'booking_date'  => $request->booking_date,
            'booking_time'  => $request->booking_time,
            'total_harga'   => $request->total_harga,
            'status'        => $request->status,
        ]);

        return redirect()->route('booking.index')->with('success', 'Booking berhasil diperbarui.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('booking.index')->with('success', 'Booking berhasil dihapus.');
    }
}
