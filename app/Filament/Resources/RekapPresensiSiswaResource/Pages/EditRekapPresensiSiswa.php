<?php

namespace App\Filament\Resources\RekapPresensiSiswaResource\Pages;

use App\Filament\Resources\RekapPresensiSiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRekapPresensiSiswa extends EditRecord
{
    protected static string $resource = RekapPresensiSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
