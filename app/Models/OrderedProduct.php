<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedProduct extends Model
{ 
    use HasFactory;
    protected $table= "ordered_products";
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id');
    }

    
    public function product()
    {
        return $this->hasMany('App\Models\Product','product_id');
    }

    public function setId($id)
    {
        $this->id=$id;
    }

    public function getId()

    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function getName()

    {
        return $this->name;
    }

    public function setOrderId($id)
    {
        $this->order_id=$id;
    }

    public function getOrderId()

    {
        return $this->order_id;
    }
    

    public function setCustomerId($id)
    {
        $this->customer_id=$id;
    }

    public function getCustomerId()

    {
        return $this->customer_id;
    }
    
    public function setProductId($id)
    {
        $this->product_id=$id;
    }

    public function getProductId()

    {
        return $this->product_id;
    }

    
    public function setPrice($price)
    {
        $this->price=$price;
    }

    public function getPrice()

    {
        return $this->price;
    }

    public function setQuantity($quantity)
    {
        $this->quantity=$quantity;
    }

    public function getQuantity()

    {
        return $this->quantity;
    }
}
