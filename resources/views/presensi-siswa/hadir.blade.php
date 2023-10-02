<div>
    {{ \App\Models\Siswa::hadir(auth()->user()->siswa->id, $getRecord()->tanggal) }}
</div>
