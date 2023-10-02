<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'siswa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nisn',
        'nama_siswa',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'kelas_id',
        'tahun_masuk',
        'foto',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function kasus()
    {
        return $this->hasMany(Kasus::class);
    }

    public function jumlah_kasus()
    {
        return $this->kasus()->count();
    }

    public function kehadiran($mengajar, $date)
    {
        $mengajar = Mengajar::findOrFail($mengajar);
        $presensi = Presensi::where('mengajar_id', $mengajar->id)->whereDate('tanggal', $date)->where('siswa_id', $this->id)->first();
        return $presensi;
    }

    public static function izin($siswa_id, $date)
    {
        $presensi = Presensi::where('siswa_id', $siswa_id)->where('keterangan', 'izin')->whereMonth('tanggal', Carbon::parse($date))->whereYear('tanggal', Carbon::parse($date))->count();
        return $presensi;
    }

    public static function sakit($siswa_id, $date)
    {
        $presensi = Presensi::where('siswa_id', $siswa_id)->where('keterangan', 'sakit')->whereMonth('tanggal', Carbon::parse($date))->whereYear('tanggal', Carbon::parse($date))->count();
        return $presensi;
    }

    public static function alfa($siswa_id, $date)
    {
        $presensi = Presensi::where('siswa_id', $siswa_id)->where('keterangan', 'alfa')->whereMonth('tanggal', Carbon::parse($date))->whereYear('tanggal', Carbon::parse($date))->count();
        return $presensi;
    }

    public static function hadir($siswa_id, $date)
    {
        $presensi = Presensi::where('siswa_id', $siswa_id)->where('keterangan', 'hadir')->whereMonth('tanggal', Carbon::parse($date))->whereYear('tanggal', Carbon::parse($date))->count();
        return $presensi;
    }

    public static function izinBy($siswa_id, $month,$year)
    {
        $presensi = Presensi::where('siswa_id', $siswa_id)->where('keterangan', 'izin')->whereMonth('tanggal', $month)->whereYear('tanggal',$year)->count();
        return $presensi;
    }

    public static function sakitBy($siswa_id, $month,$year)
    {
        $presensi = Presensi::where('siswa_id', $siswa_id)->where('keterangan', 'sakit')->whereMonth('tanggal', $month)->whereYear('tanggal', $year)->count();
        return $presensi;
    }

    public static function alfaBy($siswa_id, $month,$year)
    {
        $presensi = Presensi::where('siswa_id', $siswa_id)->where('keterangan', 'alfa')->whereMonth('tanggal', $month)->whereYear('tanggal', $year)->count();
        return $presensi;
    }

    public static function hadirBy($siswa_id, $month,$year)
    {
        $presensi = Presensi::where('siswa_id', $siswa_id)->where('keterangan', 'hadir')->whereMonth('tanggal', $month)->whereYear('tanggal', $year)->count();
        return $presensi;
    }
}
