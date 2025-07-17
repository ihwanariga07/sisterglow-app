<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Layanan;
use Illuminate\Http\Request;

class BookingDetailController extends Controller
{
    // public function index()
    // {
    //     $bookingDetails = BookingDetail::with(['booking.customer', 'layanan'])->latest()->get();
    //     return view('admin.booking_detail.index', compact('bookingDetails'));
    // }

        public function index()
{
    $bookingDetails = BookingDetail::with([
        'booking.customer', // relasi ke customer lewat booking
        'layanan'           // relasi langsung ke layanan
    ])->get();

    return view('admin.booking_detail.index', compact('bookingDetails'));
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
            'jumlah'     => 'required|integer|min:1',
            'harga'      => 'required|numeric|min:0',
        ]);

        BookingDetail::create([
            'booking_id' => $request->booking_id,
            'layanan_id' => $request->layanan_id,
            'jumlah'     => $request->jumlah,
            'harga'      => $request->harga,
        ]);

        return redirect()->route('booking_detail.index')->with('success', 'Booking Detail berhasil ditambahkan.');
    }

    public function edit(BookingDetail $booking_detail)
    {
        $bookings = Booking::with('customer')->get();
        $layanans = Layanan::all();
        return view('admin.booking_detail.edit', [
            'bookingDetail' => $booking_detail,
            'bookings' => $bookings,
            'layanans' => $layanans
        ]);
    }

    public function update(Request $request, BookingDetail $booking_detail)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'layanan_id' => 'required|exists:layanans,id',
            'jumlah'     => 'required|integer|min:1',
            'harga'      => 'required|numeric|min:0',
        ]);

        $booking_detail->update([
            'booking_id' => $request->booking_id,
            'layanan_id' => $request->layanan_id,
            'jumlah'     => $request->jumlah,
            'harga'      => $request->harga,
        ]);

        return redirect()->route('booking_detail.index')->with('success', 'Booking Detail berhasil diperbarui.');
    }

    public function destroy(BookingDetail $booking_detail)
    {
        $booking_detail->delete();
        return redirect()->route('booking_detail.index')->with('success', 'Booking Detail berhasil dihapus.');
    }
    
}
