<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'slug', 'kategori', 'status', 'gambar', 'konten', 'user_id'];

    // Relasi ke tabel users (Penulis)
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
