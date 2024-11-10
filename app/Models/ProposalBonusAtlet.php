<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class ProposalBonusAtlet extends Model
{
    protected $fillable = [
        'NIK',
        'nama',
        'telp',
        'email',
        'no_piagam',
        'nama_kejuaraan',
        'kelas_cabor',
        'sk_pengprov',
        'piagam',
        'foto_medali',
        'no_rekening',
        'nama_bank',
        'buku_tabungan',
        'validasi',
        'keterangan',
        'user_id'
    ];

    protected $casts = [
        'validasi' => 'boolean',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
