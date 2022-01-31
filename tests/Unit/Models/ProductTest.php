<?php

namespace Tests\Unit\Unit\Models;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    // $table->id();
    // $table->string('title');
    // $table->integer('price');
    // $table->string('description');
    // $table->bigInteger('provider_id')->unsigned();

    public function test_id()
    {
        $product= new \App\Models\Product();
        $product->setId(1);
        $this->assertEquals($product->getId(),1);
            
    }

    public function test_title()
    {
        $product= new \App\Models\Product();
        $product->setTitle('Hello');
        $this->assertEquals($product->getTitle(),'Hello');
            
    }

    public function test_price()
    {
        $product= new \App\Models\Product();
        $product->setPrice(100);
        $this->assertEquals($product->getPrice(),100);
            
    }

    public function test_description()
    {
        $product= new \App\Models\Product();
        $product->setDescription('Hello');
        $this->assertEquals($product->getDescription(),'Hello');
            
    }

    public function test_provder_id()
    {
        $product= new \App\Models\Product();
        $product->setProviderId(1);
        $this->assertEquals($product->getProviderId(),1);
            
    }
}
