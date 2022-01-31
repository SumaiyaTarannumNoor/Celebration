<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table= "messages";
    public $timestamps = false;

    public function setRecipentId($id)
    {
        $this->recipent_id=$id;
    }

    public function getRecipentId()

    {
        return $this->recipent_id;
    }

    public function setSenderId($id)
    {
        $this->sender_id=$id;
    }

    public function getSenderId()

    {
        return $this->sender_id;
    }

    public function setMeetingId($id)
    {
        $this->meeting_id=$id;
    }

    public function getMeetingId()

    {
        return $this->meeting_id;
    }
    
    public function setMessageBody($comment)
    {
        $this->messagebody=$comment;
    }

    public function getMessageBody()

    {
        return $this->messagebody;
    }


    public function setSender($comment)
    {
        $this->sender=$comment;
    }

    public function getSender()

    {
        return $this->sender;
    }

}
