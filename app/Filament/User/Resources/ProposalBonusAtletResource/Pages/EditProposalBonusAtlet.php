<?php

namespace App\Filament\User\Resources\ProposalBonusAtletResource\Pages;

use App\Filament\User\Resources\ProposalBonusAtletResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProposalBonusAtlet extends EditRecord
{
    protected static string $resource = ProposalBonusAtletResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
