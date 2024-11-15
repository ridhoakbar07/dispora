<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProposalBonusAtlet extends Model
{
    protected $fillable = [
        'NIK',
        'nama',
        'telp',
        'email',
        'ktp',
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

    protected static function booted(): void
    {

        static::addGlobalScope('user', function (Builder $query) {
            if (auth()->check() && auth()->user()->id > 1) {
                $query->where('user_id', '=', auth()->user()->id);
            }
        });
    }
}
