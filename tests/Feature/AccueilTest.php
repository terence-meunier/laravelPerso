<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccueilTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_an_api_request()
    {
        $response = $this->getJson('/accueil');

        $response
            ->assertStatus(200)
            ->assertJson([
                'message' => 'coucou',
            ]);
    }
}
