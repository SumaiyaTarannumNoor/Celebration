<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    public function setId($id)
    {
        $this->id=$id;
    }

    public function getId()

    {
        return $this->id;
    }

    public function setEmail($email)
    {
        $this->email=$email;
    }

    public function getEmail()

    {
        return $this->email;
    }

    public function setFullName($name)
    {
        $this->fullname=$name;
    }

    public function getFullName()

    {
        return $this->fullname;
    }

    public function setSubject($subject)
    {
        $this->subject=$subject;
    }

    public function getSubject()

    {
        return $this->subject;
    }
    public function setMessage($message)
    {
        $this->message=$message;
    }

    public function getMessage()

    {
        return $this->message;
    }
}
