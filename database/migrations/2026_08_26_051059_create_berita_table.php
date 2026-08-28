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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique(); // Untuk URL detail-berita/judul-berita
            $table->string('kategori'); // Misal: Prestasi, Agenda, Umum
            $table->string('gambar')->nullable(); // Path foto
            $table->longText('konten'); // Isi berita dari Summernote/Quill
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke penulis (Admin)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
