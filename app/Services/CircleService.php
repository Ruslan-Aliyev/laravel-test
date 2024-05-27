<?php

namespace App\Services;

use App\Services\ExponentService;

class CircleService 
{
	private $exponentService;
	private $pi = 3.14;

    function __construct(ExponentService $exponentService) 
    {
    	$this->exponentService = $exponentService;
    }

    public function calculateArea($radius) 
    {
        return $this->pi * $this->exponentService->calculatePower($radius, 2);
    }
}