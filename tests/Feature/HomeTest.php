<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_return_code_200()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function test_content_is_Bonjour()
    {
        $response = $this->get('/home');

        $response->assertSee('Bonjour');
    }
}
