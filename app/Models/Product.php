<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'price', 'description', 'provider_id', 
    ];
    public $timestamps=false;

    public function provider()
    {
        return $this->belongsTo('App\Models\Provider');
    }
    
   

    public function image()
    {
        return $this->hasMany('App\Models\ProductImage');
    }

    public function photo()
    {
        return $this->hasOne('App\Models\ProductImage','product_id');
    }  

    public function delete()
    {
        // delete all related photos
        $this->image()->delete();
        // as suggested by Dirk in comment,
        // it's an uglier alternative, but faster
        // Photo::where("user_id", $this->id)->delete()

        // delete the user
        return parent::delete();
    }

    public function setId($id)
    {
        $this->id=$id;
    }

    public function getId()

    {
        return $this->id;
    }

    public function setTitle($message)
    {
        $this->title=$message;
    }

    public function getTitle()

    {
        return $this->title;
    }


    public function setPrice($price)
    {
        $this->price=$price;
    }

    public function getPrice()

    {
        return $this->price;
    }

    public function setDescription($subject)
    {
        $this->description=$subject;
    }

    public function getDescription()

    {
        return $this->description;
    }

   
   public function setProviderId($id)
    {
        $this->provider_id=$id;
    }

    public function getProviderId()

    {
        return $this->provider_id;
    }
}
