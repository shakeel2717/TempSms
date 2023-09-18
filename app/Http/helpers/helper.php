<?php

use App\Models\Advertisement;

function advertisement($type)
{
    $ads = Advertisement::where('type', $type)->first();
    return $ads->ad_code ?? "";
}
