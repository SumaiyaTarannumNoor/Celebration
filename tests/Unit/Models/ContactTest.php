<?php

namespace Tests\Unit\Unit\Models;

use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{
    // $table->id();
    //         $table->string('fullname');
    //         $table->string('email');
    //         $table->string('subject');
    //         $table->string('message');

      public function test_id()
    {
        $contact= new \App\Models\Contact();
        $contact->setId(1);
        $this->assertEquals($contact->getId(),1);
            
    }
     
    public function test_fullname()
    {
        $contact= new \App\Models\Contact();
        $contact->setId(1);
        $this->assertEquals($contact->getId(),1);
            
    }

    public function test_email()
    {
        $contact= new \App\Models\Contact();
        $contact->setId(1);
        $this->assertEquals($contact->getId(),1);
            
    }

    public function test_subject()
    {
        $contact= new \App\Models\Contact();
        $contact->setSubject(1);
        $this->assertEquals($contact->getSubject(),1);
            
    }
    public function test_message()
    {
        $contact= new \App\Models\Contact();
        $contact->setMessage(1);
        $this->assertEquals($contact->getMessage(),1);
            
    }

}
