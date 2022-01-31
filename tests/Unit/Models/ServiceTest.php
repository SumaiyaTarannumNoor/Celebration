<?php

namespace Tests\Unit\Unit\Models;

use PHPUnit\Framework\TestCase;

// $table->id();
// $table->string('name');
// $table->string('capacity')->nullable();
// $table->string('pricerange');

class ServiceTest extends TestCase
{
    public function test_id()
    {
        $service= new \App\Models\Service();
        $service->setId(1);
        $this->assertEquals($service->getId(),1);
            
    }

    public function test_service_name()
    {
        $service= new \App\Models\Service();
        $service->setserviceName('Furrria');
        $this->assertEquals($service->getserviceName(),'Furrria');
            
    }
    public function test_capacity()
    {
        $service= new \App\Models\Service();
        $service->setCapacity(100);
        $this->assertEquals($service->getCapacity(),100);
            
    }
    public function test_price_range()
    {
        $service= new \App\Models\Service();
        $service->setRange(100);
        $this->assertEquals($service->getRange(),100);
            
    }
   
}
