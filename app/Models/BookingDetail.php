<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    protected $fillable = [
        'booking_id',
        'layanan_id',
        'jumlah',
        'harga',
        'subtotal', // pastikan ini juga ada di DB
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
    

    /**
     * Hitung subtotal otomatis jika tidak diisi manual
     */
    public function getSubtotalAttribute($value)
    {
        if (!is_null($value)) {
            return $value;
        }

        return $this->harga * $this->jumlah;
    }
}
