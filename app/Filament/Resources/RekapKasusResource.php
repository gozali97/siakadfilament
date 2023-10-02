<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Siswa;
use Filament\Forms\Form;
use App\Models\RekapKasus;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RekapKasusResource\Pages;
use App\Filament\Resources\RekapKasusResource\RelationManagers;

class RekapKasusResource extends Resource
{
    protected static ?string $model = RekapKasus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Rekap';

    public static function table(Table $table): Table
    {
        return $table
            ->query(Siswa::all()->toQuery())
            ->columns([
                Tables\Columns\TextColumn::make('nama_siswa')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelas.nama_kelas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kasus')
                    ->formatStateUsing(function($record){
                        return $record->jumlah_kasus();
                    })
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('cetak')->label('Cetak Rekap Kasus')
                ->url(fn(Siswa $record):string => route('rekap.kasus',$record->id))
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

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete(Model $record): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
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
            'index' => Pages\ListRekapKasuses::route('/'),
        ];
    }
}
