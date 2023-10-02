<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Siswa;
use App\Models\Presensi;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public $data;
    public function __construct()
    {
        $this->data = [];
    }
    public function rekapPresensi(Request $request)
    {
        set_time_limit(300);
        $pass = json_decode($request->data);
        $this->data['siswa'] = Siswa::with('kelas')->where('kelas_id',$pass->kelas_id)->get();
        $this->data['bulan'] = $pass->bulan;
        $this->data['tahun'] = $pass->tahun;
        $view = view()->make('rekap.rekap-presensi',$this->data)->render();
        // return view('rekap.rekap-presensi',$this->data);
        $filename = 'Rekap Presensi.pdf';
        $pdf = new TCPDF;
        $pdf::SetTitle('Rekap Presensi');
        $pdf::AddPage();
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output(public_path($filename), 'F');
        return response()->download(public_path($filename));
    }

    public function rekapKasus(Siswa $siswa)
    {
        set_time_limit(300);
        $this->data['siswa'] = $siswa;
        $this->data['kasuses'] = Kasus::where('siswa_id')->get();
        $view = view()->make('rekap.rekap-kasus',$this->data)->render();
        // return view('rekap.rekap-kasus',$this->data);
        $filename = 'Rekap Kasus.pdf';
        $pdf = new TCPDF;
        $pdf::SetTitle('Rekap Kasus');
        $pdf::AddPage();
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output(public_path($filename), 'F');
        return response()->download(public_path($filename));
    }


}
