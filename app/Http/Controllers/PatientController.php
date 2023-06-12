<?php

namespace App\Http\Controllers;

use App\Helpers\MedicalRecordHelper;
use App\Models\Ethnic;
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
            'provinces' => $provinces,
            'ethnics' => Ethnic::all()
        ]);
    }

    public function detail_patient(Patient $patient)
    {
        return $patient;
    }

    public function simpan_pendaftaran_pasien(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255', 'nickname' => 'max:255',
            'title' => 'required|max:255', 'gender' => 'required|max:255',
            'place' => 'required|max:255', 'date_of_birth' => 'required|max:255',
            'religion' => 'required|max:255', 'blood_group' => 'max:255',
            'allergy' => 'max:255', 'married_status' => 'max:255',
            'language' => 'required|max:255', 'citizenship' => 'max:255',
            'id_card' => 'max:255', 'address' => 'required|max:255',
            'province' => 'max:255', 'regency' => 'required|max:255',
            'subdistrict' => 'required|max:255', 'ward' => 'required|max:255',
            'mobile_phone_number' => 'max:255', 'email' => 'max:255',
            'last_education' => 'required|max:255', 'ethnic' => 'required|max:255',
            'job' => 'required|max:255',
        ]);

        $validatedData['medical_record_number'] = MedicalRecordHelper::generateMedicalRecordNumber();
        Patient::create($validatedData);
        return redirect('/daftar_rekam_medis')->with('success', 'Barang berhasil ditambahkan!');
    }
}
