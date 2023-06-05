<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PatientController extends Controller
{
    public function daftar_rm()
    {
        return view('web.pages.pendaftaran.daftar-rekam-medis', [
            'patients' => Patient::all()
        ]);
    }


    public function pendaftaran_pasien_baru()
    {
        $response = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
        $provinces = $response->json()['provinsi'];

        return view('web.pages.pendaftaran.pendaftaran-pasien-baru', [
            'provinces' => $provinces
        ]);
    }

    public function simpan_pendaftaran_pasien(Request $request)
    {
    }
}
