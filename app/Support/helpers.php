<?php

use Carbon\Carbon;

function custPrint($data, $die = null)
{
    echo "<pre>";
    print_r($data);
    $die ? false : die;
}

function getCurrentTime()
{
    $mytime = Carbon::now();
    return $mytime->toDateTimeString();
}
