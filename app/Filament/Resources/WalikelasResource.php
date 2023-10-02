<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WalikelasResource\Pages;
use App\Filament\Resources\WalikelasResource\RelationManagers;
use App\Models\Walikelas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WalikelasResource extends Resource
{
    protected static ?string $model = Walikelas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Wali Kelas';
    protected static ?string $navigationGroup = 'Data Umum';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('guru_id')
                    ->relationship('guru', 'nama_guru')
                    ->required(),
                Forms\Components\Select::make('kelas_id')
                    ->relationship('kelas', 'nama_kelas')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('guru.nama_guru')
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelas.nama_kelas')
                    ->sortable(),
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
            'index' => Pages\ListWalikelas::route('/'),
            'create' => Pages\CreateWalikelas::route('/create'),
            'edit' => Pages\EditWalikelas::route('/{record}/edit'),
        ];
    }
}
