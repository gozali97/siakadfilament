<?php

namespace App\Filament\Resources\KategoriKasusResource\Pages;

use App\Filament\Resources\KategoriKasusResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKategoriKasus extends CreateRecord
{
    protected static string $resource = KategoriKasusResource::class;
    public static function canCreateAnother(): bool
    {
        return false;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
