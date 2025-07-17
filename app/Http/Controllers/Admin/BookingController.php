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
            'total_harga'   => 'required|numeric',
            'status'        => 'required|string',
        ]);

        Booking::create($request->all());

        return redirect()->route('booking.index')->with('success', 'Booking berhasil ditambahkan.');
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
            'total_harga'   => 'required|numeric',
            'status'        => 'required|string',
        ]);

        $booking->update($request->all());

        return redirect()->route('booking.index')->with('success', 'Booking berhasil diperbarui.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('booking.index')->with('success', 'Booking berhasil dihapus.');
    }
}
