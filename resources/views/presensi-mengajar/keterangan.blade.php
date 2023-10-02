<div>
    @if ($getRecord()->kehadiran($mengajar_id, \Carbon\Carbon::now()))
        <span>{{ $getRecord()->kehadiran($mengajar_id, \Carbon\Carbon::now())->keterangan }}</span>
    @else
        Belum Melakukan Presensi
    @endif
</div>
