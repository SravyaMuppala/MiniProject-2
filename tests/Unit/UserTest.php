<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
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
        $user = new User();
        $user->name = '';
        $user->email = '';
        $user->password = '';
        $this->assertTrue($user->save());
    }
    public function testUpdate()
    {
        $user = User::inRandomOrder()->first();
        $user->name = 'Steve Smith';
        $user->email = '';
        $user->password = '';
        $user->save();
        $this->assertTrue($user->update());
    }
    public function testDelete()
    {
        $user = User::inRandomOrder()->first();
        $user->name = '';
        $user->email = '';
        $user->password = '';
        $user->save();
        $this->assertTrue($user->delete());
    }
    public function testCountUsersIs50()
    {
        $user = User::All();
        $user->count='50';
        $this->assertEquals(50, $user->count());
    }


}
