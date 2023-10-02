<?php

namespace App\Listeners;

use App\Events\BuatAkunGuru;
use App\Models\Guru;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BuatAkun
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
    public function handle($event): void
    {
        User::updateOrCreate([
            'username' => $event->guru->nip
        ], [
            'name' => $event->guru->nama_guru,
            'password' => bcrypt($event->guru->nip),
            'email' => $event->guru->nip . '@gmail.com'
        ]);

        $data = User::where('username', $event->guru->nip)->first();
        $data->syncRoles('guru');
    }
}
