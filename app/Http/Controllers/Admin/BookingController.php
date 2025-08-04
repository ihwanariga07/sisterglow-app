<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Customer;
use App\Models\Layanan;
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
        $layanans = Layanan::all();
        return view('admin.booking.create', compact('customers', 'layanans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id'   => 'required|exists:customers,id',
            'booking_date'  => 'required|date',
            'booking_time'  => 'required',
            'status'        => 'required|string',

            'layanan_id'    => 'required|array',
            'layanan_id.*'  => 'exists:layanans,id',
            'jumlah'        => 'required|array',
            'jumlah.*'      => 'numeric|min:1',
            'harga'         => 'required|array',
            'harga.*'       => 'numeric|min:0',
        ]);

        // Hitung total harga dari subtotal layanan
        $total = 0;
        foreach ($request->layanan_id as $key => $layananId) {
            $subtotal = $request->harga[$key] * $request->jumlah[$key];
            $total += $subtotal;
        }

        // Simpan ke tabel bookings
        $booking = Booking::create([
            'customer_id'   => $request->customer_id,
            'booking_date'  => $request->booking_date,
            'booking_time'  => $request->booking_time,
            'status'        => $request->status,
            'total_harga'   => $total,
        ]);

        // Simpan ke tabel booking_details
        foreach ($request->layanan_id as $key => $layananId) {
            BookingDetail::create([
                'booking_id' => $booking->id,
                'layanan_id' => $layananId,
                'jumlah'     => $request->jumlah[$key],
                'harga'      => $request->harga[$key],
                'subtotal'   => $request->harga[$key] * $request->jumlah[$key],
            ]);
        }

        return redirect()->route('booking.index')->with('success', 'Booking berhasil ditambahkan.');
    }

    public function show(Booking $booking)
    {
        $booking->load(['customer', 'bookingDetails.layanan']);
        return view('admin.booking.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $customers = Customer::all();
        $layanans = Layanan::all();
        $booking->load('bookingDetails.layanan');
        return view('admin.booking.edit', compact('booking', 'customers', 'layanans'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'customer_id'   => 'required|exists:customers,id',
            'booking_date'  => 'required|date',
            'booking_time'  => 'required',
            'status'        => 'required|string',

            'layanan_id'    => 'required|array',
            'layanan_id.*'  => 'exists:layanans,id',
            'jumlah'        => 'required|array',
            'jumlah.*'      => 'numeric|min:1',
            'harga'         => 'required|array',
            'harga.*'       => 'numeric|min:0',
        ]);

        // Hitung ulang total harga
        $total = 0;
        foreach ($request->layanan_id as $key => $layananId) {
            $subtotal = $request->harga[$key] * $request->jumlah[$key];
            $total += $subtotal;
        }

        // Update data booking
        $booking->update([
            'customer_id'   => $request->customer_id,
            'booking_date'  => $request->booking_date,
            'booking_time'  => $request->booking_time,
            'status'        => $request->status,
            'total_harga'   => $total,
        ]);

        // Hapus semua detail lama, lalu simpan ulang
        $booking->bookingDetails()->delete();
        foreach ($request->layanan_id as $key => $layananId) {
            BookingDetail::create([
                'booking_id' => $booking->id,
                'layanan_id' => $layananId,
                'jumlah'     => $request->jumlah[$key],
                'harga'      => $request->harga[$key],
                'subtotal'   => $request->harga[$key] * $request->jumlah[$key],
            ]);
        }

        return redirect()->route('booking.index')->with('success', 'Booking berhasil diperbarui.');
    }

    public function destroy(Booking $booking)
    {
        $booking->bookingDetails()->delete();
        $booking->delete();
        return redirect()->route('booking.index')->with('success', 'Booking berhasil dihapus.');
    }
}
