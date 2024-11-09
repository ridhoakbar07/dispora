<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pegawai extends Model
{

    protected $fillable = ['NIP', 'nama', 'jenis_kelamin', 'pangkat_gol', 'jabatan', 'jenis_jabatan', 'photo', 'unit_kerja_id'];
    
    public function unitKerja(): BelongsTo
    {
        return $this->belongsTo(UnitKerja::class);
    }

}
