<?php

namespace App\Filament\Resources\KasusResource\Pages;

use App\Filament\Resources\KasusResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKasus extends CreateRecord
{
    protected static string $resource = KasusResource::class;
    public static function canCreateAnother(): bool
    {
        return false;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
