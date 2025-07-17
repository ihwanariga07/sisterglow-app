<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanans';

    protected $fillable = [
        'nama_layanan',
        'deskripsi',
        'harga',
    ];

    /**
     * Relasi ke booking_details (satu layanan bisa ada di banyak detail)
     */
    public function bookingDetails()
    {
        return $this->hasMany(BookingDetail::class);
    }

    /**
     * (Opsional) Relasi many-to-many ke booking melalui booking_details
     */
    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_details');
    }
}