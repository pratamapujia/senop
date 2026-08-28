<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    use HasFactory;

    protected $table = 'struktur';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_lengkap', 'jabatan', 'foto', 'status'];
}
