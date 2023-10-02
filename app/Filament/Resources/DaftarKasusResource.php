<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DaftarKasusResource\Pages;
use App\Filament\Resources\DaftarKasusResource\RelationManagers;
use App\Models\DaftarKasus;
use App\Models\Kasus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DaftarKasusResource extends Resource
{
    protected static ?string $model = DaftarKasus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Daftar Kasus';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kategoriKasus.nama_kategori')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_kasus')
                    ->searchable(),
            ])
            ->filters([
                //
            ]);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDaftarKasuses::route('/'),
            // 'create' => Pages\CreateDaftarKasus::route('/create'),
            // 'edit' => Pages\EditDaftarKasus::route('/{record}/edit'),
        ];
    }
}
