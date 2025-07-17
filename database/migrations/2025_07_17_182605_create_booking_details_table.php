<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
    Schema::create('booking_details', function (Blueprint $table) {
    $table->id();
    $table->foreignId('booking_id')->constrained()->onDelete('cascade');
    $table->foreignId('layanan_id')->constrained()->onDelete('cascade');
    $table->integer('jumlah')->default(1);
    $table->integer('subtotal');
    $table->timestamps();
});

    }

    public function down(): void
    {
        Schema::dropIfExists('booking_details');
    }
};
