<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_costumer'); // foreign key ke costumerss

            $table->date('booking_date');
            $table->time('booking_time');
            $table->decimal('total_harga', 10, 2)->nullable();

            $table->timestamps();

            $table->foreign('id_costumer')->references('id')->on('costumerss')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
