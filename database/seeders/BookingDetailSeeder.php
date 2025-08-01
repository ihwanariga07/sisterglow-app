<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookingDetail;
use App\Models\Booking;
use App\Models\Layanan;

class BookingDetailSeeder extends Seeder
{
    public function run()
    {
        $booking = Booking::first(); // ambil 1 data booking
        $layanan = Layanan::first(); // ambil 1 data layanan

        if ($booking && $layanan) {
            BookingDetail::create([
                'booking_id' => $booking->id,
                'layanan_id' => $layanan->id,
                'harga' => 50000,
                'jumlah' => 1,
                'subtotal' => 50000,
            ]);
        }
    }
}
