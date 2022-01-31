<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
// $table->id()->nullable();
// $table->bigInteger('customer_id');
// $table->bigInteger('event_id')->nullable();
// $table->bigInteger('service_id');
// $table->string('service_name');
// $table->string('capacity');

// $table->string('pricerange');

class EventServiceTest extends TestCase
{
    
    public function test_id()
    {
        $service= new \App\Models\EventService();
        $service->setId(1);
        $this->assertEquals($service->getId(),1);
            
    }

    public function test_customer_id()
    {
        $service= new \App\Models\EventService();
        $service->setcustomerId(1);
        $this->assertEquals($service->getcustomerId(),1);
            
    }
    public function test_event_id()
    {
        $service= new \App\Models\EventService();
        $service->seteventId(1);
        $this->assertEquals($service->geteventId(),1);
            
    }
    public function test_service_id()
    {
        $service= new \App\Models\EventService();
        $service->setserviceId(1);
        $this->assertEquals($service->getserviceId(),1);
            
    }
    public function test_service_name()
    {
        $service= new \App\Models\EventService();
        $service->setserviceName('Furrria');
        $this->assertEquals($service->getserviceName(),'Furrria');
            
    }

  
    public function test_capacity()
    {
        $service= new \App\Models\EventService();
        $service->setCapacity(100);
        $this->assertEquals($service->getCapacity(),100);
            
    }
    public function test_price_range()
    {
        $service= new \App\Models\EventService();
        $service->setRange(100);
        $this->assertEquals($service->getRange(),100);
            
    }
}
