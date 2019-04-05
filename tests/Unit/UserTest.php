<?php

namespace Tests\Unit;

use Tests\TestCase;
class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testShowUsertest()
    {
        $response = $this->json('POST', route('api.user.auth'), ['email'=>'captain@enterprise.com']);
        
        $response->assertStatus(200);

        $this->assertTrue($response->json()['id']==1);
    }
}
