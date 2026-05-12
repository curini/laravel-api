<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_home_returns_a_successful_response(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
    }

    public function test_status_returns_a_succesful_response(): void
    {
        $response = $this->get(route('api.status'));

        $response->assertStatus(200)->assertJson(['status' => true]);
    }

    public function test_properties_returns_a_succesful_response(): void
    {
        $response = $this->get(route('api.properties', [
            'country' => 'fr',
            'state' => 'vente'
        ]));

        $response->assertStatus(200);
    }
}
