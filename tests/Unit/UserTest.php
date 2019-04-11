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
   


}
