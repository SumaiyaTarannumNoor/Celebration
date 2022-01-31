<?php

namespace Tests\Unit\Unit\Models;

use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
// $table->bigInteger('recipent_id')->unsigned();
//             $table->bigInteger('sender_id')->unsigned();
//             $table->bigInteger('meeting_id')->unsigned();
//             $table->text('messagebody');
//             $table->string('sender');
{
    public function test_recipent_id()
    {
        $productReviews= new \App\Models\Message();
        $productReviews->setRecipentId(1);
        $this->assertEquals($productReviews->getRecipentId(),1);
            
    }

    public function test_sender_id()
    {
        $productReviews= new \App\Models\Message();
        $productReviews->setSenderId(1);
        $this->assertEquals($productReviews->getSenderId(),1);
            
    }
    public function test_meeting_id()
    {
        $productReviews= new \App\Models\Message();
        $productReviews->setMeetingId(1);
        $this->assertEquals($productReviews->getMeetingId(),1);
            
    }
    public function test_messagebody()
    {
        $productReviews= new \App\Models\Message();
        $productReviews->setMessageBody('Hello');
        $this->assertEquals($productReviews->getMessageBody(),'Hello');
            
    }
    public function test_sender()
    {
        $productReviews= new \App\Models\Message();
        $productReviews->setSender('hello');
        $this->assertEquals($productReviews->getSender(),'hello');
            
    }
}
