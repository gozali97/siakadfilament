<?php

namespace App\Filament\Resources\MengajarResource\Pages;

use App\Filament\Resources\MengajarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMengajars extends ListRecords
{
    protected static string $resource = MengajarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
