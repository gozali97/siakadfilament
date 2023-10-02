<div>
    @if ($getRecord()->kehadiran($mengajar_id, \Carbon\Carbon::now()))
        <span>{{ $getRecord()->kehadiran($mengajar_id, \Carbon\Carbon::now())->pertemuan_ke }}</span>
    @else
        -
    @endif
</div>
