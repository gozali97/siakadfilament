<?php

namespace App\Filament\Resources\DaftarKasusResource\Pages;

use App\Filament\Resources\DaftarKasusResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDaftarKasus extends CreateRecord
{
    protected static string $resource = DaftarKasusResource::class;

    public static function canCreateAnother(): bool
    {
        return false;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
