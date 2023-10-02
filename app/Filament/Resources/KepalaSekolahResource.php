<?php

namespace App\Filament\Resources;

use App\Events\BuatAkunKepsek;
use App\Filament\Resources\KepalaSekolahResource\Pages;
use App\Filament\Resources\KepalaSekolahResource\RelationManagers;
use App\Models\KepalaSekolah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KepalaSekolahResource extends Resource
{
    protected static ?string $model = KepalaSekolah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Data Kepala Sekolah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nip')
                    ->required()
                    ->maxLength(100),
                Forms\Components\Textarea::make('nama_kepala_sekolah')
                    ->maxLength(65535)
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->nullable()
                    ->maxLength(50),
                Forms\Components\FileUpload::make('foto')
                    ->nullable()
                    ->columnSpanFull(),
                Forms\Components\Select::make('status')
                    ->options([
                        'tidak aktif' => 'Tidak Aktif',
                        'aktif' => 'Aktif'
                    ])->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_kepala_sekolah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'aktif' => 'success',
                        'tidak aktif' => 'danger',
                    })
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('create_user')
                    ->label('Buat Akun')
                    ->requiresConfirmation()
                    ->action(function (KepalaSekolah $record) {
                        event(new BuatAkunKepsek($record));
                        Notification::make()
                            ->title('Berhasil Buat Akun')
                            ->success()
                            ->send();
                    }),
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
            'index' => Pages\ListKepalaSekolahs::route('/'),
            'create' => Pages\CreateKepalaSekolah::route('/create'),
            'edit' => Pages\EditKepalaSekolah::route('/{record}/edit'),
        ];
    }
}
