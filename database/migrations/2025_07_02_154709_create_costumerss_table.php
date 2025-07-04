<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('costumerss', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_hp', 15);
            $table->string('email', 50)->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('costumerss');
    }
};
