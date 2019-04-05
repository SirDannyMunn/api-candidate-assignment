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
        $email = 'captain@enterprise.com';

        $response = $this->json('POST', route('api.user.auth'), ['email'=>$email]);
        
        $response->assertStatus(200);

        $this->assertTrue($response->json()['email']==$email);
    }
}
