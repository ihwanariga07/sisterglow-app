<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'booking_date',
        'booking_time',
        'total_harga',
        'status',
    ];

    /**
     * Relasi ke customer (banyak booking dimiliki oleh satu customer)
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Relasi ke booking_details (satu booking punya banyak detail)
     */
    public function bookingDetails()
    {
        return $this->hasMany(BookingDetail::class);
    }

    /**
     * (Opsional) Relasi many-to-many ke layanan lewat booking_details
     */
    public function layanans()
    {
        return $this->belongsToMany(Layanan::class, 'booking_details');
    }
}
