<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('layanans', function (Blueprint $table) {
        $table->id(); // kolom id otomatis, primary key
        $table->string('nama_layanan');
        $table->text('deskripsi')->nullable();
        $table->decimal('harga', 10, 2); // format uang: maksimal 99999999.99
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
