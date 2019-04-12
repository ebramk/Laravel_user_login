<?php

namespace Tests\Unit;

use function PHPSTORM_META\expectedArguments;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInteger()
    {
        $user = User::inRandomOrder() ->first();

        $this->assertInternalType('int',$user->id);

    }
    public function testString()
    {
        $user = User::inRandomOrder() ->first();

        $this->assertInternalType('string',$user->name);

    }



}
?>

}
