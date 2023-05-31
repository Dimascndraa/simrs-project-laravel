<?php

namespace App\Helpers;

use App\Models\Patient;

class MedicalRecordHelper
{
    public static function generateMedicalRecordNumber()
    {
        $medicalRecordNumber = '';
        do {
            $randomNumber1 = str_pad(mt_rand(0, 99), 2, '0', STR_PAD_LEFT);
            $randomNumber2 = str_pad(mt_rand(0, 99), 2, '0', STR_PAD_LEFT);
            $randomNumber3 = str_pad(mt_rand(0, 99), 2, '0', STR_PAD_LEFT);

            $medicalRecordNumber = $randomNumber1 . '-' . $randomNumber2 . '-' . $randomNumber3;

            $count = Patient::where('medical_record_number', $medicalRecordNumber)->count();
        } while ($count > 0);

        return $medicalRecordNumber;
    }
}
