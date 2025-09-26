<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configs extends Model
{
    use HasFactory;

    protected $table = 'configs';
    protected $fillable = ['name', 'label', 'value', 'type'];
    protected $appends = ['file_path'];

    public function getFilePathAttribute()
    {
        if ($this->type == 1) {
            if ($this->value != null) {
                return asset('storage/config/' . $this->value);
            } else {
                return asset('assets/senop/img/none.jpg');
            }
        }
    }
}
