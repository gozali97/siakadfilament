<?php

namespace App\Filament\Resources\KategoriKasusResource\Pages;

use App\Filament\Resources\KategoriKasusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriKasuses extends ListRecords
{
    protected static string $resource = KategoriKasusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
