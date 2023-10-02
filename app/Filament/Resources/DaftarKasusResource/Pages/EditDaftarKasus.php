<?php

namespace App\Filament\Resources\DaftarKasusResource\Pages;

use App\Filament\Resources\DaftarKasusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDaftarKasus extends EditRecord
{
    protected static string $resource = DaftarKasusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
