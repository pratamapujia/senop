<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = "struktur";
    protected $primaryKey = "id";
    protected $fillable = ['public_id', 'nama', 'jabatan', 'foto'];
}
