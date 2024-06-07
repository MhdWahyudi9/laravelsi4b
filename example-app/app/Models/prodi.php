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
        //return $this->belongsTo(nama Model:class, 'oreign_key');
        //1 prodi 1 fakultas belongasTo()
        //1 fakultas > 1 prodi hasMany()


    }

    protected $fillable = ['nama', 'singkatan', 'fakultas_id'];
}
