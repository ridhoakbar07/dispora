<?php

namespace App\Filament\Resources\ProposalBonusAtletResource\Pages;

use App\Filament\Resources\ProposalBonusAtletResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditProposalBonusAtlet extends EditRecord
{
    protected static string $resource = ProposalBonusAtletResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        if (empty($data['user_id'])) {
            $data['user_id'] = auth()->user()->id;
        }

        $record->update($data);

        return $record;
    }
}
