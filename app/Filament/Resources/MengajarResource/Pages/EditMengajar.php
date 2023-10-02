<?php

namespace App\Filament\Resources\MengajarResource\Pages;

use App\Filament\Resources\MengajarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMengajar extends EditRecord
{
    protected static string $resource = MengajarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
