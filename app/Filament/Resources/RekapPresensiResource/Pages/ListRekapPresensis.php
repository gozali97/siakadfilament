<?php

namespace App\Filament\Resources\RekapPresensiResource\Pages;

use App\Filament\Resources\RekapPresensiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRekapPresensis extends ListRecords
{
    protected static string $resource = RekapPresensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
