<div>
    {{ \App\Models\Siswa::izin(auth()->user()->siswa->id, $getRecord()->tanggal) }}
</div>
