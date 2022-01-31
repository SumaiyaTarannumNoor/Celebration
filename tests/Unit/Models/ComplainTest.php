<?php

namespace Tests\Unit\Unit\Models;

use PHPUnit\Framework\TestCase;

class ComplainTest extends TestCase
{
    // $table->string('provider_name');
    // $table->string('subject');
    // $table->string('details');
    // $table->bigInteger('customer_id')->unsigned();

    public function test_customer_id()
    {
        $complaint= new \App\Models\Complain();
        $complaint->setCustomerId(1);
        $this->assertEquals($complaint->getCustomerId(),1);
            
    }

    public function test_subject()
    {
        $complaint= new \App\Models\Complain();
        $complaint->setSubject('1');
        $this->assertEquals($complaint->getSubject(),'1');
            
    }
    public function test_provider_name()
    {
        $complaint= new \App\Models\Complain();
        $complaint->setProviderName('Furrria');
        $this->assertEquals($complaint->getProviderName(),'Furrria');
            
    }
    public function test_details()
    {
        $complaint= new \App\Models\Complain();
        $complaint->setDetails('1');
        $this->assertEquals($complaint->getDetails(),'1');
            
    }

  
}
