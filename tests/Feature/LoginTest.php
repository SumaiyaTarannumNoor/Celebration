<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    public function test_example()
    {   
        $this->withoutExceptionHandling();
        $customer=Customer::factory()->create();
        $this->actingAs($customer);

        // $response = $this->get('/login');

        // $response->assertStatus(302);
        $response = $this->post("/login", ["email" => "ilya@gmail.com", "password" => "bakhlin"]);

        $response->assertStatus(302);
        
    }
}

