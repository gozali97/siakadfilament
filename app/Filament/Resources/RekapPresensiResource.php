<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RekapPresensiResource\Pages;
use App\Filament\Resources\RekapPresensiResource\RelationManagers;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\RekapPresensi;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RekapPresensiResource extends Resource
{
    protected static ?string $model = RekapPresensi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Rekap';


    public static function table(Table $table): Table
    {
        $year = [];
        for($i=date('Y'); $i>=date('Y')-32; $i-=1){
            $year[$i]=$i;
        }
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_kelas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_kelas')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('Cetak Presensi')
                    ->form([
                        Select::make('bulan')
                            ->options([
                                '01' => 'Januari',
                                '02' => 'Febuari',
                                '03' => 'Maret',
                                '04' => 'April',
                                '05' => 'May',
                                '06' => 'Juni',
                                '07' => 'Juli',
                                '08' => 'Agustus',
                                '09' => 'September',
                                '10' => 'Oktober',
                                '11' => 'November',
                                '12' => 'Desember',
                            ])
                        ->searchable()
                        ->required(),
                        Select::make('tahun')
                            ->options($year)
                            ->searchable()
                            ->required(),
                    ])
                    ->action(function(array $data,RekapPresensi $record){
                        $data['kelas_id'] = $record->id;
                        return redirect(route('rekap.presensi',['data'=>json_encode($data)]));
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function canDelete(Model $record): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRekapPresensis::route('/'),
        ];
    }
}
