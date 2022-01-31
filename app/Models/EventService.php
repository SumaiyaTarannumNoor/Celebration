<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventService extends Model
{   protected $table= "event_services";
    use HasFactory;
    public $timestamps = false;


    public function event()
    {
        return $this->belongsTo('App\Models\Customer');
    }
    public function provider()
    {
        return $this->belongsTo('App\Models\Provider');
    }
    public function services()
    {
        return $this->hasOne('App\Models\Service');
    }

    public function setId($id)
    {
        $this->id=$id;
    }

    public function getId()

    {
        return $this->id;
    }
    
    public function setcustomerId($id)
    {
        $this->customer_id=$id;
    }

    public function getcustomerId()

    {
        return $this->customer_id;
    }
    
    public function seteventId($id)
    {
        $this->event_id=$id;
    }

    public function geteventId()

    {
        return $this->event_id;
    }
    public function setserviceId($id)
    {
        $this->service_id=$id;
    }

    public function getserviceId()

    {
        return $this->service_id;
    }


    public function setserviceName($name)
    {
        $this->service_name=$name;
    }

    public function getserviceName()

    {
        return $this->service_name;
    }

    public function setCapacity($capacity)
    {
        $this->capacity=$capacity;
    }

    public function getCapacity()

    {
        return $this->capacity;
    }

    public function setrange($range)
    {
        $this->pricerange=$range;
    }

    public function getrange()

    {
        return $this->pricerange;
    }
}
