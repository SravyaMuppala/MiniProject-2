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
    public function testDelete()
    {
        $car = Car::inRandomOrder()->first();
        $car->make = '';
        $car->model = '';
        $car->year = '';
        $car->save();
        $this->assertTrue($car->delete());
    }
    public function testCountCar()
    {
        $car = Car::All();
        $car->count='50';
        $this->assertEquals(50, $car->count());
    }
    public function testEitherCar()
    {
        $car = Car::inRandomOrder()->first();
        $value=$car->make;
        $this->assertContains($value, ['honda','toyota','ford']);
    }
    public function testString()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertInternalType('string',$car->model);
    }


}
