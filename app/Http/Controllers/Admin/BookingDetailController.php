<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Layanan;
use Illuminate\Http\Request;

class BookingDetailController extends Controller
{
    public function index()
    {
        $details = BookingDetail::with(['booking.customer', 'layanan'])->latest()->get();
        return view('admin.booking_detail.index', compact('details'));
    }

    public function create()
    {
        $bookings = Booking::with('customer')->get();
        $layanans = Layanan::all();
        return view('admin.booking_detail.create', compact('bookings', 'layanans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'layanan_id' => 'required|exists:layanans,id',
            'qty'        => 'required|integer|min:1',
            'harga'      => 'required|numeric|min:0',
        ]);

        $subtotal = $request->qty * $request->harga;

        BookingDetail::create([
            'booking_id' => $request->booking_id,
            'layanan_id' => $request->layanan_id,
            'qty'        => $request->qty,
            'harga'      => $request->harga,
            'subtotal'   => $subtotal,
        ]);

        return redirect()->route('booking-detail.index')->with('success', 'Booking Detail berhasil ditambahkan.');
    }

    public function edit(BookingDetail $booking_detail)
    {
        $bookings = Booking::with('customer')->get();
        $layanans = Layanan::all();
        return view('admin.booking_detail.edit', compact('booking_detail', 'bookings', 'layanans'));
    }

    public function update(Request $request, BookingDetail $booking_detail)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'layanan_id' => 'required|exists:layanans,id',
            'qty'        => 'required|integer|min:1',
            'harga'      => 'required|numeric|min:0',
        ]);

        $subtotal = $request->qty * $request->harga;

        $booking_detail->update([
            'booking_id' => $request->booking_id,
            'layanan_id' => $request->layanan_id,
            'qty'        => $request->qty,
            'harga'      => $request->harga,
            'subtotal'   => $subtotal,
        ]);

        return redirect()->route('booking-detail.index')->with('success', 'Booking Detail berhasil diperbarui.');
    }

    public function destroy(BookingDetail $booking_detail)
    {
        $booking_detail->delete();
        return redirect()->route('booking-detail.index')->with('success', 'Booking Detail berhasil dihapus.');
    }
}
