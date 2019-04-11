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
    public function testUpdateCar()
    {
        $car = Car::inRandomOrder()->first();
        $car->make = '';
        $car->model = '';
        $car->year = '2000';
        $car->save();
        $this->assertTrue($car->update());
    }


}
