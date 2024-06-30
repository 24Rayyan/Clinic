<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('keterangan', function (Blueprint $table) {
            $table->id();
            $table->string('pasien_NIK'); // Kolom untuk menampung NIK pasien
            $table->foreign('pasien_NIK')->references('NIK')->on('pasiens')->onDelete('cascade'); // Relasi foreign key
            $table->text('keterangan');
            $table->timestamp('tanggal')->default(now()); // Default value yang disarankan
            $table->timestamps();
        });

        Schema::table('keterangan', function (Blueprint $table) {
            $table->foreign('pasien_NIK')->references('NIK')->on('pasiens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keterangan');
    }

    
};
