<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\DaftarKasus;
use App\Models\Guru;
use App\Models\JadwalMengajar;
use App\Models\Kasus;
use App\Models\KategoriKasus;
use App\Models\Kelas;
use App\Models\KepalaSekolah;
use App\Models\Mapel;
use App\Models\Mengajar;
use App\Models\Presensi;
use App\Models\RekapKasus;
use App\Models\RekapPresensi;
use App\Models\RekapPresensiSiswa;
use App\Models\Semester;
use App\Models\Siswa;
use App\Models\TahunPelajaran;
use App\Models\User;
use App\Models\Walikelas;
use App\Policies\DaftarKasusPolicy;
use App\Policies\GuruPolicy;
use App\Policies\JadwalMengajarPolicy;
use App\Policies\KasusPolicy;
use App\Policies\KategoriKasusPolicy;
use App\Policies\KelasPolicy;
use App\Policies\KepalaSekolahPolicy;
use App\Policies\MapelPolicy;
use App\Policies\MengajarPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\PresensiPolicy;
use App\Policies\RekapKasusPolicy;
use App\Policies\RekapPresensiPolicy;
use App\Policies\RekapPresensiSiswaPolicy;
use App\Policies\RolePolicy;
use App\Policies\SemesterPolicy;
use App\Policies\SiswaPolicy;
use App\Policies\TahunPelajaranPolicy;
use App\Policies\UserPolicy;
use App\Policies\WaliKelasPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        GuruPolicy::class => Guru::class,
        KasusPolicy::class => Kasus::class,
        KategoriKasusPolicy::class => KategoriKasus::class,
        KelasPolicy::class => Kelas::class,
        KepalaSekolahPolicy::class => KepalaSekolah::class,
        MapelPolicy::class => Mapel::class,
        MengajarPolicy::class => Mengajar::class,
        PresensiPolicy::class => Presensi::class,
        RolePolicy::class => Role::class,
        SemesterPolicy::class => Semester::class,
        SiswaPolicy::class => Siswa::class,
        TahunPelajaranPolicy::class => TahunPelajaran::class,
        UserPolicy::class => User::class,
        WaliKelasPolicy::class => Walikelas::class,
        PermissionPolicy::class => Permission::class,
        DaftarKasusPolicy::class => DaftarKasus::class,
        JadwalMengajarPolicy::class => JadwalMengajar::class,
        RekapPresensiPolicy::class => RekapPresensi::class,
        RekapKasusPolicy::class => RekapKasus::class,
        RekapPresensiSiswaPolicy::class => RekapPresensi::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
