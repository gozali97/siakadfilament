<?php

namespace App\Filament\Resources\WalikelasResource\Pages;

use App\Filament\Resources\WalikelasResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWalikelas extends CreateRecord
{
    protected static string $resource = WalikelasResource::class;
    public static function canCreateAnother(): bool
    {
        return false;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
