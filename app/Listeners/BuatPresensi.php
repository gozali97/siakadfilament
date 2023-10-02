<?php

namespace App\Listeners;

use App\Models\Presensi;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BuatPresensi
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Presensi::updateOrCreate([
            'mengajar_id' => $event->data['mengajar_id'],
            'guru_id' => $event->data['guru_id'],
            'siswa_id' => $event->data['siswa_id'],
            'tanggal' => Carbon::now(),
            'pertemuan_ke' => $event->data['pertemuan_ke']
        ], [
            'keterangan' => $event->data['keterangan'],
        ]);
    }
}
