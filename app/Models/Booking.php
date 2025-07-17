<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'costumer_id',
        'booking_date',
        'booking_time',
        'total_harga',
        'status',
    ];

    public function costumer()
    {
        return $this->belongsTo(Costumer::class);
    }
}
