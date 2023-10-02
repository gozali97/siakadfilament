<?php

namespace App\Filament\Resources\MengajarResource\Pages;

use App\Filament\Resources\MengajarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMengajar extends CreateRecord
{
    protected static string $resource = MengajarResource::class;
    public static function canCreateAnother(): bool
    {
        return false;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
