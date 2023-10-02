<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KasusResource\Pages;
use App\Filament\Resources\KasusResource\RelationManagers;
use App\Models\Kasus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KasusResource extends Resource
{
    protected static ?string $model = Kasus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Kasus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('siswa_id')
                    ->relationship('siswa', 'nama_siswa')
                    ->columnSpanFull()
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('kategori_kasus_id')
                    ->relationship('kategoriKasus', 'nama_kategori')
                    ->columnSpanFull()
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('nama_kasus')
                    ->columnSpanFull()
                    ->maxLength(50)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('siswa.nama_siswa')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategoriKasus.nama_kategori')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_kasus')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
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
            'index' => Pages\ListKasuses::route('/'),
            'create' => Pages\CreateKasus::route('/create'),
            'edit' => Pages\EditKasus::route('/{record}/edit'),
        ];
    }
}
