<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAllCategoriesTest()
    {
        $response = $this->json('GET', route('api.categories'));

        $response->assertStatus(200);
    }
}
