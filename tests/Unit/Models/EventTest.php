<?php

namespace Tests\Unit\Unit\Models;

use PHPUnit\Framework\TestCase;
// $table->id();
// $table->string('name');
// $table->integer('amount');
// $table->string('event_type');

class EventTest extends TestCase
{ 

    public function test_id()
    {
        $service= new \App\Models\Event();
        $service->setId(1);
        $this->assertEquals($service->getId(),1);
            
    }
    public function test_service_name()
    {
        $service= new \App\Models\Event();
        $service->setserviceName('Furrria');
        $this->assertEquals($service->getserviceName(),'Furrria');
            
    }
    
    public function test_event_type()
    {
        $service= new \App\Models\Event();
        $service->setserviceType('Furrria');
        $this->assertEquals($service->getserviceType(),'Furrria');
            
    }

    public function test_amount()
    {
        $service= new \App\Models\Event();
        $service->setAmount(100);
        $this->assertEquals($service->getAmount(),100);
            
    }
    


   
}
