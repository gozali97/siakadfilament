<?php

namespace App\Filament\Resources\RekapPresensiSiswaResource\Pages;

use App\Filament\Resources\RekapPresensiSiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRekapPresensiSiswas extends ListRecords
{
    protected static string $resource = RekapPresensiSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
