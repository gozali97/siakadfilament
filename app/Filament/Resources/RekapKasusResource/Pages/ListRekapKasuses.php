<?php

namespace App\Filament\Resources\RekapKasusResource\Pages;

use App\Filament\Resources\RekapKasusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRekapKasuses extends ListRecords
{
    protected static string $resource = RekapKasusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
