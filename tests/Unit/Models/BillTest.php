<?php

namespace Tests\Unit\Unit\Models;

use PHPUnit\Framework\TestCase;

class BillTest extends TestCase
{   
    // $table->foreignId('customer_id')->constrained()->onDelete('cascade');
    // $table->string('fullname');
    // $table->string('emailaddress');
    // $table->string('phonenumber');
    // $table->string('shippingaddress');
    // $table->double('amount');

    public function test_id()
    {
        $contact= new \App\Models\Bill();
        $contact->setId(1);
        $this->assertEquals($contact->getId(),1);
            
    }

    public function test_customer_id()
    {
        $bill= new \App\Models\Bill;
        $bill->setcustomerId(1);
        $this->assertEquals($bill->getcustomerId(),1);
            
    }
    public function test_fullname()
    {
        $bill= new \App\Models\Bill;
        $bill->setFullName('Furrria');
        $this->assertEquals($bill->getFullName(),'Furrria');
            
    }

    public function test_emailaddress()
    {
        $bill= new \App\Models\Bill;
        $bill->setEmailAddress('Furrria@email.com');
        $this->assertEquals($bill->getEmailAddress(),'Furrria@email.com');
            
    }
    public function test_phonenumber()
    {
        $bill= new \App\Models\Bill;
        $bill->setPhoneNumber('01999');
        $this->assertEquals($bill->getPhoneNumber(),'01999');
            
    }
    public function test_shippingaddress()
    {
        $bill= new \App\Models\Bill;
        $bill->setShippingAddress('House-1,Road-1,Sector-1,City,Country');
        $this->assertEquals($bill->getShippingAddress(),'House-1,Road-1,Sector-1,City,Country');
            
    }
    public function test_amount()
    {
        $bill= new \App\Models\Bill;
        $bill->setAmount(100);
        $this->assertEquals($bill->getAmount(),100);
            
    }

}
