<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    protected $fillable = [
        'nama', 'telepon', 'alamat'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
