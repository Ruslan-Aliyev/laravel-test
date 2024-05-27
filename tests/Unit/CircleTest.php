<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\CircleService;
use App\Services\ExponentService;

class CircleTest extends TestCase
{
    public function test_calculate_area()
    {
        // $exponentService = $this->getMockBuilder(ExponentService::class)
        //     ->disableOriginalConstructor()
        //     ->getMock();

        //@Todo: Read again how to use appropriately: https://laravel.com/docs/11.x/mocking

        $exponentService = new ExponentService();
        $circleService = new CircleService($exponentService);

        $testRadius = 3;

        $result = $circleService->calculateArea($testRadius);

        $this->assertEquals( 
            3.14 * pow($testRadius, 2), 
            $result
        );
    }
}
