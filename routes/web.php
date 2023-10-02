<?php

use App\Http\Controllers\RekapController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('rekap-presensi',[RekapController::class,'rekapPresensi'])->name('rekap.presensi');
Route::get('rekap-kasus/{siswa}',[RekapController::class,'rekapKasus'])->name('rekap.kasus');

Route::get('/', function () {
    return redirect()->route('filament.admin.auth.login');
});
