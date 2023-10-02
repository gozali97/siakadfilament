<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BuatAkunK
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
            'username' => $event->kepsek->nip
        ], [
            'name' => $event->kepsek->nama_kepala_sekolah,
            'password' => bcrypt($event->kepsek->nip),
            'email' => $event->kepsek->nip . '@gmail.com'
        ]);

        $data = User::where('username', $event->kepsek->nip)->first();
        $data->syncRoles('kepsek');
    }
}
