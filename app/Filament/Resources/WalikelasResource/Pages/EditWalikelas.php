<?php

namespace App\Filament\Resources\WalikelasResource\Pages;

use App\Filament\Resources\WalikelasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWalikelas extends EditRecord
{
    protected static string $resource = WalikelasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
