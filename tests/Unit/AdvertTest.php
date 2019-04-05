<?php

namespace Tests\Unit;

use Tests\TestCase;
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
