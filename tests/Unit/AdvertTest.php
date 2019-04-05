<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdvertTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAllAdvertsTest()
    {
        $response = $this->json('GET', route('api.adverts'));

        $response->assertStatus(200);
    }
}
