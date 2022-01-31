<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'capacity','pricerange','provider_id',
    ];
    protected $table= "services";
    public $timestamps=false;
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    public function provider()
    {
        return $this->belongsTo('App\Models\Provider','provider_id');
    }
    public function service()
    {
        return $this->belongsTo('App\Models\Service','service_id');
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
