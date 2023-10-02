<?php

namespace App\Filament\Resources\KepalaSekolahResource\Pages;

use App\Filament\Resources\KepalaSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKepalaSekolahs extends ListRecords
{
    protected static string $resource = KepalaSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
