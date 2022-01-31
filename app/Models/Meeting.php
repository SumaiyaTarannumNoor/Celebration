<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{   protected $table= "meetings";
    use HasFactory;
    public $timestamps = false;
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    public function provider()
    {
        return $this->belongsTo('App\Models\Provider','provider_id');
    }
    public function setId($id)
    {
        $this->id=$id;
    }

    public function getId()

    {
        return $this->id;
    }
    
    public function setCustomerId($id)
    {
        $this->customer_id=$id;
    }

    public function getCustomerId()

    {
        return $this->customer_id;
    }

    public function setProviderId($id)
    {
        $this->provider_id=$id;
    }

    public function getProviderId()

    {
        return $this->provider_id;
    }

    public function setDescription($name)
    {
        $this->description=$name;
    }

    public function getDescription()

    {
        return $this->description;
    }
    public function setStatus($name)
    {
        $this->status=$name;
    }

    public function getStatus()

    {
        return $this->status;
    }

    public function setDate($date)
    {
        $this->scheduleddate=$date;
    }

    public function getDate()

    {
        return $this->scheduleddate;
    }
    public function setTime($time)
    {
        $this->scheduledtime=$time;
    }

    public function getTime()

    {
        return $this->scheduledtime;
    }
}
