<?php

namespace App\Filament\Resources\RekapKasusResource\Pages;

use App\Filament\Resources\RekapKasusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRekapKasus extends EditRecord
{
    protected static string $resource = RekapKasusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
