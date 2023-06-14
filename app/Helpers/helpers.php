<?php

use Carbon\Carbon;

function displayAge($birthdate)
{
    $now = Carbon::now();
    $age = Carbon::parse($birthdate)->diff($now);

    $years = $age->y;
    $months = $age->m;
    $days = $age->d;

    $result = '';

    if ($years > 0) {
        $result .= $years . 'thn';
    }

    if ($months > 0) {
        if ($result !== '') {
            $result .= ', ';
        }
        $result .= $months . 'bln';
    }

    if ($days > 0) {
        if ($result !== '') {
            $result .= ', ';
        }
        $result .= $days . 'hr';
    }

    return $result;
}
