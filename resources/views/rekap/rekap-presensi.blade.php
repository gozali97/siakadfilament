<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rekap Presensi</title>
</head>


<body>
    <div>
        <table border="0" cellpadding=0 cellspacing=0>
            <tr>
                <td width="20%" align="center">
                    <img src="/img/logo.jpeg" width="70" height="70">
                </td>
                <td width="80%" align="center">
                    <div style="float: left;">
                        <span style="font-size:12px;">Kota Palembang</span><br />
                        <span  style="font-size: 14px"><b>Yayasan Pendidikan Utama Bakti</b></span><br />
                        <span  style="font-size: 10px"><i>Jln SMK utama bakti, Lorong Sido Makmur IV, Sukajaya, Kec. Sukarami,
                                Kota Palembang, Sumatera Selatan 30151</i></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
        </table>
        <br>
        <table align="center">
            <tr>
                <td><span size="5" style="font-size: 25px;"><b>REKAP PRESENSI KELAS</b></span></td>
            </tr>
        </table>
        <br><br><br><br><br>
        <table border="1" align="center">
            <tr>
                <td>Nama Siswa</td>
                <td>Izin</td>
                <td>Sakit</td>
                <td>Alpha</td>
                <td>Hadir</td>
            </tr>
            @foreach ($siswa as $dataSiswa)
                <tr>
                    <td align="center">{{$dataSiswa->nama_siswa}}</td>
                    <td align="center">{{\App\Models\Siswa::izinBy($dataSiswa->id,$bulan,$tahun)}}</td>
                    <td align="center">{{\App\Models\Siswa::sakitBy($dataSiswa->id,$bulan,$tahun)}}</td>
                    <td align="center">{{\App\Models\Siswa::alfaBy($dataSiswa->id,$bulan,$tahun)}}</td>
                    <td align="center">{{\App\Models\Siswa::hadirBy($dataSiswa->id,$bulan,$tahun)}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
