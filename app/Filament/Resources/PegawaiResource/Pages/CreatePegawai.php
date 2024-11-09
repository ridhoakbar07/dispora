<?php

namespace App\Filament\Resources\PegawaiResource\Pages;

use App\Filament\Resources\PegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreatePegawai extends CreateRecord
{
    protected static string $resource = PegawaiResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        if (empty($data['photo'])) {
            $data['photo'] = ($data['jenis_kelamin'] === "L")
                ? "web_profile/foto_asn/default_pria.png"
                : "web_profile/foto_asn/default_wanita.png";
        }

        return static::getModel()::create($data);
    }
}
