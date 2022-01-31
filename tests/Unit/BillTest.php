<?php

namespace Tests\Unit;

use App\Models\Customer;
use App\Models\Bill;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class BillTest extends TestCase
{

  use RefreshDatabase;

  public function test_user_can_submit_payment_details()
  {
    $this->withoutExceptionHandling();
    $customer=Customer::factory()->create();
    $this->actingAs($customer);

    $response = $this->post(uri: '/bill', data: [

        'fullname' => 'Furrria',
        'emailaddress' => 'hello@gmail.com',
        'phonenumber' => '03434300',
        'shippingaddress' => 'House',
    ]);

    $response->assertStatus(status: 302);

    $bill = Bill::first();

    $this->assertEquals(expected: 1, actual: Bill::count());
    $this->assertEquals(expected: 'Furrria', actual: $bill->fullname);
    $this->assertEquals(expected: 'hello@gmail.com', actual: $bill->emailaddress);
    $this->assertEquals(expected: '03434300', actual: $bill->phonenumber);
    $this->assertEquals(expected: 'House', actual: $bill->shippingaddress);
    $this->assertEquals(expected: $customer->id, actual: $bill->customer_id);
  }
    
}
