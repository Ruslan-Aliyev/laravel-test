<?php

namespace App\Services;

class ExponentService 
{
    public function calculatePower($radius, $power) 
    {
        return pow($radius, $power);
    }
}