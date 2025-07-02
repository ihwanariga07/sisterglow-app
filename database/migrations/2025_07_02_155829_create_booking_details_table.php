<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_booking');  // relasi ke bookings
            $table->unsignedBigInteger('id_layanan');  // relasi ke layanans
            $table->decimal('harga', 10, 2);
            $table->timestamps();

            $table->foreign('id_booking')->references('id')->on('bookings')->onDelete('cascade');
            $table->foreign('id_layanan')->references('id')->on('layanans')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking_details');
    }
};
