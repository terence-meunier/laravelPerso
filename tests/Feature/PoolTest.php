<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PoolTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_route_get_pool()
    {
        $response = $this->get('/pool');

        $response->assertStatus(200);
    }

    public function test_get_pool_return_json()
    {
        $response = $this->get('/pool');

        $response->assertJson([
            'id' => 1,
            'nom_ville' => 'Valence',
            'date' => '03/2021',
            'actif' => true,
            'section' => 'tech dev'
        ]);
    }
}
