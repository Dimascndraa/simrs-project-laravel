<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web', 'auto.logout']], function () {
    Route::get('/daftar-rekam-medis', [PatientController::class, 'daftar_rm'])->name('pendaftaran.pasien.daftar_rm');
    Route::get('/pendaftaran-pasien-baru', [PatientController::class, 'pendaftaran_pasien_baru'])->name('pendaftaran.pasien.pendaftaran_pasien_baru');
    Route::post('/pendaftaran-pasien-baru', [PatientController::class, 'simpan_pendaftaran_pasien'])->name('simpan.pendaftaran.pasien');
    Route::get('/patients/{patient}', [PatientController::class, 'detail_patient'])->name('detail.pendaftaran.pasien');
    Route::get('/patients/{patient:id}/edit', [PatientController::class, 'edit_pendaftaran_pasien'])->name('edit.pendaftaran.pasien');
    Route::post('/patients/{patient:id}/', [PatientController::class, 'update_pendaftaran_pasien'])->name('update.pendaftaran.pasien');
    Route::get('/patients/{patient:id}/print', [PatientController::class, 'print_identitas_pasien'])->name('print.identitas.pasien');
    Route::get('/data', [PatientController::class, 'getData'])->name('data.route');
});
