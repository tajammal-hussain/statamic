<?php

function customPrint($data, $die = null)
{
    echo "<pre>";
    print_r($data);
    $die ? die : false;
}
