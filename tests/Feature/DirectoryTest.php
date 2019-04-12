<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DirectoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFailure()
    {
        $this->assertDirectoryExists('/home/ebram/PhpstormProjects/user_login/app');
    }
}
