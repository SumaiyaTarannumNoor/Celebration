<?php

namespace Tests\Unit\Unit\Models;

use PHPUnit\Framework\TestCase;

class ProductImageTest extends TestCase
{
    public function test_image()
    {
        $product= new \App\Models\ProductImage();
        $product->setImage('a.jpg');
        $this->assertEquals($product->getImage(),'a.jpg');
            
    }
}
