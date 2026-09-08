<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'id';
    protected $fillable = ['kategori_id', 'kode_jurusan', 'nama_jurusan', 'deskripsi_hero', 'konten', 'peluang_kerja'];
    protected $casts = [
        // 'konten' => 'array',
        'peluang_kerja' => 'array',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function galeri()
    {
        return $this->hasMany(Galeri::class, 'kategori_id', 'kategori_id');
    }
}
