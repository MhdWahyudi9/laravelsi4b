<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    use HasFactory;

    public function Fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'Fakultas_id');
    }
}
