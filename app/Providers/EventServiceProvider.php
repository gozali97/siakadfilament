<?php

namespace App\Providers;

use App\Events\BuatAkunGuru;
use App\Events\BuatAkunKepsek;
use App\Events\BuatAkunSiswa;
use App\Events\BuatPresensiSiswa;
use App\Listeners\BuatAkun;
use App\Listeners\BuatAkunK;
use App\Listeners\BuatAkunS;
use App\Listeners\BuatPresensi;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        BuatAkunGuru::class => [
            BuatAkun::class
        ],
        BuatAkunKepsek::class => [
            BuatAkunK::class
        ],
        BuatAkunSiswa::class => [
            BuatAkunS::class
        ],
        BuatPresensiSiswa::class => [
            BuatPresensi::class
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
