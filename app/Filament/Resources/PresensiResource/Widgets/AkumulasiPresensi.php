<?php

namespace App\Filament\Resources\PresensiResource\Widgets;

use App\Models\Presensi;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\DB;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use App\Filament\Resources\PresensiResource\Pages\ListPresensis;

class AkumulasiPresensi extends Widget
{
    use InteractsWithPageTable;
    protected static string $view = 'filament.resources.presensi-resource.widgets.akumulasi-presensi';
}
