<?php

namespace App\Filament\Resources\KepalaSekolahResource\Pages;

use App\Filament\Resources\KepalaSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKepalaSekolah extends EditRecord
{
    protected static string $resource = KepalaSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
