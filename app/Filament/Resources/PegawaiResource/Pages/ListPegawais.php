<?php

namespace App\Filament\Resources\PegawaiResource\Pages;

use App\Filament\Resources\PegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Model;

class ListPegawais extends ListRecords
{
    protected static string $resource = PegawaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->mutateFormDataUsing(function (array $data): array {
                if (empty($data['photo'])) {
                    $data['photo'] = $data['jenis_kelamin'] === "L"
                        ? "web_profile/foto_asn/default_pria.png"
                        : "web_profile/foto_asn/default_wanita.png";
                }
                return $data;
            }),
        ];
    }
}
