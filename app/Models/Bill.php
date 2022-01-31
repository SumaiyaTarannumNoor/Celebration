<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{   protected $table= "bills";
    use HasFactory;

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

    public function setFullName($FullName)
    {
        $this->fullname=$FullName;
    }

    public function getFullName()

    {
        return $this->fullname;
    }

  
    public function setEmailAddress($email)
    {
        $this->emailaddress=$email;
    }

    public function getEmailAddress()

    {
        return $this->emailaddress;
    }

    public function setPhoneNumber($phonenumber)
    {
        $this->phonenumber=$phonenumber;
    }

    public function getPhoneNumber()

    {
        return $this->phonenumber;
    }

    public function setShippingAddress($shippingaddress)
    {
        $this->shippingaddress=$shippingaddress;
    }

    public function getShippingAddress()

    {
        return $this->shippingaddress;
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
