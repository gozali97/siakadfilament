<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMengajar extends Model
{
    use HasFactory;
    protected $table = 'mengajar';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['mapel_id', 'tahun_pelajaran_id', 'semester_id', 'guru_id', 'hari', 'kelas_id', 'waktu_mulai', 'waktu_selesai', 'jam_ke'];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function tahun_pelajaran()
    {
        return $this->belongsTo(TahunPelajaran::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function presensi()
    {
        return $this->hasMany(PresensiMengajar::class);
    }
}
