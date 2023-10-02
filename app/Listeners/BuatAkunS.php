<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BuatAkunS
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
        User::updateOrCreate([
            'username' => $event->siswa->nisn
        ], [
            'name' => $event->siswa->nama_siswa,
            'password' => bcrypt($event->siswa->nisn),
            'email' => $event->siswa->nisn . '@gmail.com'
        ]);

        $data = User::where('username', $event->siswa->nisn)->first();
        $data->syncRoles('siswa');
    }
}
