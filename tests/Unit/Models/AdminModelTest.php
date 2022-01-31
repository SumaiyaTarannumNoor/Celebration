<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class AdminModelTest extends TestCase
{
       
    public function test_username()
    {
        $admin= new \App\Models\Admin;
        $admin->setUserName('Furrria');
        $this->assertEquals($admin->getUserName(),'Furrria');
            
    }

    public function test_email()
    {
        $admin= new \App\Models\Admin;
        $admin->setEmail('furrria@gmail.com');
        $this->assertEquals($admin->getEmail(),'furrria@gmail.com');
    }

    public function test_password()
    {
        $admin= new \App\Models\Admin;
        $admin->setPassword('furrria');
        $this->assertEquals($admin->getPassword(),'furrria');
    }
}
