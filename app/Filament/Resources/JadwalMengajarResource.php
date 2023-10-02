<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalMengajarResource\Pages;
use App\Filament\Resources\JadwalMengajarResource\Pages\PresensiMengajar;
use App\Filament\Resources\PresensiMengajarResource\Pages\ListPresensiMengajars;
use App\Models\JadwalMengajar;
use App\Models\Mengajar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Panel;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalMengajarResource extends Resource
{
    protected static ?string $model = JadwalMengajar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('mapel.nama_mapel')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun_pelajaran.tahun_pelajaran')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('semester.semester')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('guru.nama_guru')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hari')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelas.nama_kelas')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waktu_mulai'),
                Tables\Columns\TextColumn::make('waktu_selesai'),
                Tables\Columns\TextColumn::make('jam_ke')
                    ->searchable(),
            ])
            ->filters([])
            ->actions([
                Action::make('presensi-mengajar')->url(function ($record) {
                    return route('filament.admin.resources.jadwal-mengajars.presensi-mengajar', [$record->id, $record->kelas_id, $record->guru_id]);
                })
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJadwalMengajars::route('/'),
            'presensi-mengajar' => Pages\PresensiMengajar::route('/{mengajar}/presensi-mengajar/{kelas}/{guru}')
        ];
    }
}
