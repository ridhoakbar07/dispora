<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'web_profiles';

    protected $fillable =  ['nama_skpd','alias_skpd','telp','email','sosmed','visi_misi','tujuan_sasaran', 'struktur_organisasi', 'sasaran_strategis'];

    protected $casts = [
        'sosmed' => 'array',
    ];
}
