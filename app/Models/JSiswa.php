<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JSiswa extends Model
{
    protected $table = 'jumlah_siswa';
    protected $primaryKey = 'id';
    protected $fillable = ['jurusan', 'total_siswa'];
}
