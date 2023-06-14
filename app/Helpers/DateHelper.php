<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    public static function getIndonesianDateFormat($date)
    {
        $carbonDate = Carbon::parse($date)->locale('id_ID');
        return $carbonDate->isoFormat('D MMMM YYYY');
    }
}
