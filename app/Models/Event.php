<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{   protected $table= "events";
    use HasFactory;
    public $timestamps=false;
    public function services()
    {
        return $this->hasMany('App\Models\EventService');
    }

    public function setId($id)
    {
        $this->id=$id;
    }

    public function getId()

    {
        return $this->id;
    }
    public function setserviceName($name)
    {
        $this->name=$name;
    }

    public function getserviceName()

    {
        return $this->name;
    }
    public function setserviceType($type)
    {
        $this->event_type=$type;
    }

    public function getserviceType()

    {
        return $this->event_type;
    }

    public function setAmount($amount)
    {
        $this->amount=$amount;
    }

    public function getAmount()

    {
        return $this->amount;
    }
    
}
