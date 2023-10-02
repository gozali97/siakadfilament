<?php

namespace App\Filament\Resources\JadwalMengajarResource\Pages;

use App\Filament\Resources\JadwalMengajarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalMengajar extends EditRecord
{
    protected static string $resource = JadwalMengajarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
