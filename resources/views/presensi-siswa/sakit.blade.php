<div>
    {{ \App\Models\Siswa::sakit(auth()->user()->siswa->id, $getRecord()->tanggal) }}
</div>
