<?php

use App\Helpers\MedicalRecordHelper;

$medicalRecordNumber = MedicalRecordHelper::generateMedicalRecordNumber();
echo $medicalRecordNumber;