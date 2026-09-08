<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'slug'];

    // Relasi ke tabel berita
    public function berita()
    {
        return $this->hasMany(Berita::class, 'kategori_id');
    }

    // Relasi ke tabel galeri
    public function galeri()
    {
        return $this->hasMany(Galeri::class, 'kategori_id');
    }

    // Relasi ke tabel jurusan
    public function jurusan()
    {
        return $this->hasMany(Jurusan::class, 'kategori_id');
    }
}
