<?php

namespace App\Filament\User\Resources\ProposalBonusAtletResource\Pages;

use App\Filament\User\Resources\ProposalBonusAtletResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateProposalBonusAtlet extends CreateRecord
{
    protected static string $resource = ProposalBonusAtletResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        if (empty($data['user_id'])) {
            $data['user_id'] = auth()->user()->id;
        }

        return static::getModel()::create($data);
    }
}
