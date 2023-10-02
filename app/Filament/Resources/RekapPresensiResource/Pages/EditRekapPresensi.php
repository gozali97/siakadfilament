<?php

namespace App\Filament\Resources\RekapPresensiResource\Pages;

use App\Filament\Resources\RekapPresensiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRekapPresensi extends EditRecord
{
    protected static string $resource = RekapPresensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
