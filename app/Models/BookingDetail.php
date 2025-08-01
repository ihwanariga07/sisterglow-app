<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    protected $fillable = [
        'booking_id', 'layanan_id', 'harga', 'jumlah', 'subtotal'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
}
