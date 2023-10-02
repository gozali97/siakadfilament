<?php

namespace App\Filament\Resources\KategoriKasusResource\Pages;

use App\Filament\Resources\KategoriKasusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriKasus extends EditRecord
{
    protected static string $resource = KategoriKasusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
