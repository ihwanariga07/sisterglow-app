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
     * Relasi: Satu booking dimiliki oleh satu customer.
     */
public function customer()
{
    return $this->belongsTo(Customer::class);
}
    /**
     * Relasi: Satu booking punya banyak detail.
     */
    public function bookingDetails()
    {
        return $this->hasMany(BookingDetail::class);
    }

    /**
     * Relasi many-to-many ke layanan lewat booking_details.
     */
    public function layanans()
    {
        return $this->belongsToMany(Layanan::class, 'booking_details');
    }

    /**
     * (Opsional) Total harga otomatis dari detail.
     */
    public function getTotalHargaAttribute()
    {
        return $this->bookingDetails->sum('subtotal');
    }
}
