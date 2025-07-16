<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'costumer_id', 'tanggal_booking', 'status'
    ];

    public function costumer()
    {
        return $this->belongsTo(Costumer::class);
    }

    public function bookingDetail()
    {
        return $this->hasMany(BookingDetail::class);
    }
}
