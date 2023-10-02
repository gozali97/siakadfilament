<?php

namespace App\Filament\Resources\WalikelasResource\Pages;

use App\Filament\Resources\WalikelasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWalikelas extends ListRecords
{
    protected static string $resource = WalikelasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
