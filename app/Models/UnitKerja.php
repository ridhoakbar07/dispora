<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UnitKerja extends Model
{
    protected $fillable = ['nama_bidang'];
    
    public function pegawai(): HasOne
    {
        return $this->hasOne(Pegawai::class);
    }
}
