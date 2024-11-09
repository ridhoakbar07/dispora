<?php

namespace App\Filament\Resources\PegawaiResource\Pages;

use App\Filament\Resources\PegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditPegawai extends EditRecord
{
    protected static string $resource = PegawaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        if (empty($data['photo'])) {
            $data['photo'] = ($data['jenis_kelamin'] === "L")
                ? "web_profile/foto_asn/default_pria.png"
                : "web_profile/foto_asn/default_wanita.png";
        }

        $record->update($data);

        return $record;
    }
}
