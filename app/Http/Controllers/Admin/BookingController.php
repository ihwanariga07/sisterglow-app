<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Costumer;
use App\Models\Layanan;
use App\Models\BookingDetail;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Tampilkan semua booking
    public function index()
    {
        $bookings = Booking::with('costumer', 'bookingDetail.layanan')->latest()->get();
        return view('admin.booking.index', compact('bookings'));
    }

    // Form tambah booking
    public function create()
    {
        $costumers = Costumer::all();
        $layanans = Layanan::all();
        return view('admin.booking.create', compact('costumers', 'layanans'));
    }

    // Simpan booking baru
    public function store(Request $request)
    {
        $request->validate([
            'costumer_id' => 'required|exists:costumers,id',
            'tanggal_booking' => 'required|date',
            'layanan_id.*' => 'required|exists:layanans,id',
        ]);

        // Simpan booking utama
        $booking = Booking::create([
            'costumer_id' => $request->costumer_id,
            'tanggal_booking' => $request->tanggal_booking,
            'status' => 'pending',
        ]);

        // Simpan detail layanan
        foreach ($request->layanan_id as $layananId) {
            BookingDetail::create([
                'booking_id' => $booking->id,
                'layanan_id' => $layananId,
                'keterangan' => null,
            ]);
        }

        return redirect()->route('admin.booking.index')->with('success', 'Booking berhasil disimpan.');
    }

    // Detail booking
    public function show($id)
    {
        $booking = Booking::with('costumer', 'bookingDetail.layanan')->findOrFail($id);
        return view('admin.booking.show', compact('booking'));
    }

    // Tambahkan fungsi edit/update/delete kalau dibutuhkan
}
