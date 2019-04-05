<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testShowUsertest()
    {
        $response = $this->json('GET', route('api.user'), ['id'=>1]);
        
        $response->assertStatus(200);

        $this->assertTrue($response->json()['id']==1);
    }
}
