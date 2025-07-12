<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDB extends Model
{
    use HasFactory;

    protected $table = 'ppdb';
    protected $primaryKey = 'id_ppdb';
    protected $fillable = ['foto', 'deskripsi', 'contact1', 'contact2', 'contact3'];
}
