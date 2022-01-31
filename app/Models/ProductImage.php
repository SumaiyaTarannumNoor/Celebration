<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $table= "product_images";
    public $timestamps=false;

    public function setImage($image)
    {
        $this->image=$image;
    }

    public function getImage()

    {
        return $this->image;
    }
}
