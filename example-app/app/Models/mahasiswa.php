<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['npm', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'prodi_id', 'url_foto'];

    public function pprodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
        //return $this->belongsTo(nama Model:class, 'oreign_key');
        //1 prodi 1 fakultas belongasTo()
        //1 fakultas > 1 prodi hasMany()
    }

}
