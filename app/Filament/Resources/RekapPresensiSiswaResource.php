<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Presensi;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\RekapPresensiSiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RekapPresensiSiswaResource\Pages;
use App\Filament\Resources\RekapPresensiSiswaResource\RelationManagers;

class RekapPresensiSiswaResource extends Resource
{
    protected static ?string $model = RekapPresensiSiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->query(Presensi::where('siswa_id', auth()->user()->siswa->id)->groupBy(DB::raw("DATE_FORMAT(tanggal, '%m-%Y')"))->get()->toQuery())
            ->columns([
                Tables\Columns\ViewColumn::make('bulan')->view('presensi-siswa.bulan'),
                Tables\Columns\ViewColumn::make('hadir')->view('presensi-siswa.hadir'),
                Tables\Columns\ViewColumn::make('sakit')->view('presensi-siswa.sakit'),
                Tables\Columns\ViewColumn::make('alfa')->view('presensi-siswa.alfa'),
                Tables\Columns\ViewColumn::make('izin')->view('presensi-siswa.izin'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListRekapPresensiSiswas::route('/'),
        ];
    }
}
