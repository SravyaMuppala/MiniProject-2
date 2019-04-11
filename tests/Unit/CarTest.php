<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    public function testInsert()
    {
        $car = new Car();
        $car->make = '';
        $car->model = '';
        $car->year = '';
        $this->assertTrue($car->save());
    }


}
