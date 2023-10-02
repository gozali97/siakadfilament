<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapPresensiSiswa extends Model
{
    use HasFactory;
    protected $table = 'presensi';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['mengajar_id', 'guru_id', 'siswa_id', 'pertemuan_ke', 'keterangan', 'tanggal'];

    public function mengajar()
    {
        return $this->belongsTo(Mengajar::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
