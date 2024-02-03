<?php

namespace App\Services;

class TimeServices {

    public function showTimenow()
    {
        return date("H:i:s");
    }
}