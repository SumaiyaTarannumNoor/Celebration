<?php

namespace Tests\Unit\Unit\Models;

use PHPUnit\Framework\TestCase;
// $table->id();
//             $table->bigInteger('customer_id')->unsigned();
//             $table->bigInteger('provider_id')->unsigned();
//             $table->date('scheduleddate');
//             $table->time('scheduledtime');
//             $table->text('description');
//             $table->string('status')->default('Pending');
class MeetingTest extends TestCase
{   
    public function test_id()
    {
        $meeting= new \App\Models\Meeting();
        $meeting->setId(1);
        $this->assertEquals($meeting->getId(),1);
            
    }

    public function test_customer_id()
    {
        $meeting= new \App\Models\Meeting();
        $meeting->setCustomerId(1);
        $this->assertEquals($meeting->getCustomerId(),1);
            
    }

    public function test_provider_id()
    {
        $meeting= new \App\Models\Meeting();
        $meeting->setProviderId(1);
        $this->assertEquals($meeting->getProviderId(),1);
            
    }

    public function test_date()
    {
        $meeting= new \App\Models\Meeting();
        $meeting->setDate(100);
        $this->assertEquals($meeting->getDate(),100);
            
    }
    public function test_time()
    {
        $meeting= new \App\Models\Meeting();
        $meeting->setTime(100);
        $this->assertEquals($meeting->getTime(),100);
            
    }

    public function test_service_description()
    {
        $meeting= new \App\Models\Meeting();
        $meeting->setDescription('Furrria');
        $this->assertEquals($meeting->getDescription(),'Furrria');
            
    }

    public function test_service_status()
    {
        $meeting= new \App\Models\Meeting();
        $meeting->setStatus('Furrria');
        $this->assertEquals($meeting->getStatus(),'Furrria');
            
    }


}
