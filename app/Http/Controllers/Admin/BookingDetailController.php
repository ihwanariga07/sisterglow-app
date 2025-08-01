<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingDetail;

class BookingDetailController extends Controller
{
    public function index()
    {
        $bookingDetails = BookingDetail::with([
            'booking.customer',
            'layanan'
        ])->get();

        return view('admin.booking_detail.index', compact('bookingDetails'));
    }
}
