<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ProviderModelTest extends TestCase
{
    public function test_username()
    {
        $provider= new \App\Models\Provider;
        $provider->setUserName('Furrria');
        $this->assertEquals($provider->getUserName(),'Furrria');
            
    }

    public function test_email()
    {
        $provider= new \App\Models\Provider;
        $provider->setEmail('furrria@gmail.com');
        $this->assertEquals($provider->getEmail(),'furrria@gmail.com');
    }

    public function test_password()
    {
        $provider= new \App\Models\Provider;
        $provider->setPassword('furrria');
        $this->assertEquals($provider->getPassword(),'furrria');
    }
}
