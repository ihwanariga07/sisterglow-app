<?php

Schema::create('booking_details', function (Blueprint $table) {
    $table->id();

    // pastikan nama tabel tujuannya benar
    $table->foreignId('booking_id')
          ->constrained('bookings')
          ->onDelete('cascade');

    $table->foreignId('layanan_id')
          ->constrained('layanans')
          ->onDelete('cascade');

    $table->integer('jumlah')->default(1);
    $table->integer('subtotal');
    $table->timestamps();
});
