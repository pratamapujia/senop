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
        Schema::create('jurusan', function (Blueprint $table) {
            $table->id();

            // Relasi ke Master Kategori (Sangat penting agar foto galeri bisa nyambung)
            $table->foreignId('kategori_id')->constrained('kategori')->onDelete('cascade');

            // Identitas Jurusan
            $table->string('kode_jurusan')->unique(); // Contoh: 'TKR'
            $table->string('nama_jurusan'); // Contoh: 'Teknik Kendaraan Ringan'
            $table->text('deskripsi_hero')->nullable();

            // Area Konten Dinamis (Menggunakan longText agar muat banyak dan bisa format HTML)
            $table->longText('konten');
            $table->longText('peluang_kerja');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusan');
    }
};
