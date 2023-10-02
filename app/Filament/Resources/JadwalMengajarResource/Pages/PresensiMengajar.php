<?php

namespace App\Filament\Resources\JadwalMengajarResource\Pages;

use Carbon\Carbon;
use App\Models\Siswa;
use App\Models\Mengajar;
use Filament\Tables\Table;
use App\Events\BuatPresensiSiswa;
use Filament\Resources\Pages\Page;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Tables\Concerns\InteractsWithTable;
use App\Filament\Resources\JadwalMengajarResource;

class PresensiMengajar extends Page implements HasTable
{
    use InteractsWithTable;
    protected static string $resource = JadwalMengajarResource::class;

    protected static string $view = 'filament.resources.jadwal-mengajar-resource.pages.presensi-mengajar';
    public $mengajar_id;
    public $kelas_id;
    public $guru_id;
    public function mount($mengajar, $kelas, $guru)
    {
        $this->mengajar_id = $mengajar;
        $this->kelas_id = $kelas;
        $this->guru_id = $guru;
    }

    public function getTitle(): string|Htmlable
    {
        $mengajar = Mengajar::findOrFail($this->mengajar_id);
        return __('Presensi Mapel ') . $mengajar->mapel->nama_mapel . ' : Tanggal - ' . Carbon::now()->format('d/m/Y');
    }

    public function table(Table $table): Table
    {
        $mengajar_id = $this->mengajar_id;
        $kelas_id = $this->kelas_id;
        $guru_id = $this->guru_id;
        return $table
            ->query(Siswa::where('kelas_id', $this->kelas_id)->get()->toQuery())
            ->emptyStateHeading('Tidak ada siswa')
            ->emptyStateDescription('Silahkaan hubungi admin untuk menambahkan siswa di kelas.')
            ->columns([
                TextColumn::make('#')->rowIndex(),
                TextColumn::make('nisn')->label('NISN')->searchable(),
                TextColumn::make('nama_siswa')->label('Nama Siswa')->searchable(),
                TextColumn::make('kelas.nama_kelas'),
                ViewColumn::make('mengajar')->label('Keterangan Kehadiran')->view('presensi-mengajar.keterangan', compact('mengajar_id')),
                ViewColumn::make('pertemuan')->label('Pertemuan Ke')->view('presensi-mengajar.pertemuan', compact('mengajar_id'))
            ])
            ->actions([
                Action::make('presensi')
                    ->fillForm(function (Siswa $record) {
                        return [
                            'keterangan' => $record->kehadiran($this->mengajar_id, Carbon::now())->keterangan,
                            'pertemuan_ke' => $record->kehadiran($this->mengajar_id, Carbon::now())->pertemuan_ke
                        ];
                    })
                    ->form(
                        [
                            Select::make('keterangan')
                                ->options([
                                    'izin' => 'Izin',
                                    'sakit' => 'Sakit',
                                    'hadir' => 'Hadir',
                                    'alpa' => 'Alpa',
                                ])
                                ->required(),
                            TextInput::make('pertemuan_ke')->required()
                        ]
                    )->action(function (Siswa $record, array $data) {
                        $data['mengajar_id'] = $this->mengajar_id;
                        $data['guru_id'] = $this->guru_id;
                        $data['siswa_id'] = $record->id;
                        event(new BuatPresensiSiswa($data));
                        Notification::make()
                            ->title('Berhasil Presensi')
                            ->success()
                            ->body('presensi telah di lakukan')
                            ->send();
                        return redirect(request()->header('Referer'));
                    })
            ]);
    }
}
