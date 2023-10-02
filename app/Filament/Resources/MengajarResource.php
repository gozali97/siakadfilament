<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MengajarResource\Pages;
use App\Filament\Resources\MengajarResource\RelationManagers;
use App\Models\Mengajar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MengajarResource extends Resource
{
    protected static ?string $model = Mengajar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Jadwal Mengajar';
    protected static ?string $navigationGroup = 'Data Jadwal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('mapel_id')
                    ->relationship('mapel', 'nama_mapel')
                    ->preload()
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('tahun_pelajaran_id')
                    ->relationship('tahun_pelajaran', 'tahun_pelajaran')
                    ->preload()
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('semester_id')
                    ->relationship('semester', 'semester')
                    ->preload()
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('guru_id')
                    ->relationship('guru', 'nama_guru')
                    ->preload()
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('hari')
                    ->options([
                        'senin' => 'Senin',
                        'selasa' => 'Selasa',
                        'rabu' => 'Rabu',
                        'kamis' => 'Kamis',
                        'jumat' => 'Jumat',
                    ])
                    ->required(),
                Forms\Components\Select::make('kelas_id')
                    ->relationship('kelas', 'nama_kelas')
                    ->preload()
                    ->searchable()
                    ->required(),
                Forms\Components\TimePicker::make('waktu_mulai')->required()->seconds(false),
                Forms\Components\TimePicker::make('waktu_selesai')->required()->seconds(false),
                Forms\Components\TextInput::make('jam_ke')
                    ->placeholder('1-10')
                    ->maxLength(50)
                    ->required()
            ]);
    }

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
                Tables\Columns\TextColumn::make('waktu_mulai')->time(),
                Tables\Columns\TextColumn::make('waktu_selesai')->time(),
                Tables\Columns\TextColumn::make('jam_ke')
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
            'index' => Pages\ListMengajars::route('/'),
            'create' => Pages\CreateMengajar::route('/create'),
            'edit' => Pages\EditMengajar::route('/{record}/edit'),
        ];
    }
}
