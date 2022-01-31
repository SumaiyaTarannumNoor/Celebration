<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CustomerModelTest extends TestCase
{
    
    public function test_username()
    {
        $customer= new \App\Models\Customer;
        $customer->setUserName('Furrria');
        $this->assertEquals($customer->getUserName(),'Furrria');
            
    }

    public function test_email()
    {
        $customer= new \App\Models\Customer;
        $customer->setEmail('furrria@gmail.com');
        $this->assertEquals($customer->getEmail(),'furrria@gmail.com');
    }

    public function test_password()
    {
        $customer= new \App\Models\Customer;
        $customer->setPassword('furrria');
        $this->assertEquals($customer->getPassword(),'furrria');
    }

    
}
