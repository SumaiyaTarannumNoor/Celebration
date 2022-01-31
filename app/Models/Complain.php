<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject', 'provider_name', 'details'
    ];
    public $timestamps=false;
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
   
    public function setCustomerId($id)
    {
        $this->customer_id=$id;
    }

    public function getCustomerId()

    {
        return $this->customer_id;
    }

    public function setProviderName($name)
    {
        $this->provider_name=$name;
    }

    public function getProviderName()

    {
        return $this->provider_name;
    }
    public function setSubject($subject)
    {
        $this->subject=$subject;
    }

    public function getSubject()

    {
        return $this->subject;
    }
    public function setDetails($details)
    {
        $this->details=$details;
    }

    public function getDetails()

    {
        return $this->details;
    }

}
