<?php

namespace Tests\Unit\Unit\Models;

use PHPUnit\Framework\TestCase;

class CartOrderTest extends TestCase
{
    // $table->bigInteger('customer_id')->unsigned();
    //         $table->bigInteger('provider_id')->unsigned();
    //         $table->bigInteger('product_id')->unsigned();
    //         $table->string('price');
    //         $table->string('subtotal');

    public function test_id()
    {
        $contact= new \App\Models\cartorder();
        $contact->setId(1);
        $this->assertEquals($contact->getId(),1);
            
    }
    public function test_customer_id()
    {
        $cartorders= new \App\Models\cartorder();
        $cartorders->setCustomerId(1);
        $this->assertEquals($cartorders->getCustomerId(),1);
            
    }

    public function test_provider_id()
    {
        $cartorders= new \App\Models\cartorder();
        $cartorders->setProviderId(1);
        $this->assertEquals($cartorders->getProviderId(),1);
            
    }
    public function test_product_id()
    {
        $cartorders= new \App\Models\cartorder();
        $cartorders->setProductId(1);
        $this->assertEquals($cartorders->getProductId(),1);
            
    }
    
    public function test_product_price()
    {
        $cartorders= new \App\Models\cartorder();
        $cartorders->setPrice(1);
        $this->assertEquals($cartorders->getPrice(),1);
            
    }
    public function test_subtotal()
    {
        $cartorders= new \App\Models\cartorder();
        $cartorders->setSubtotal(1);
        $this->assertEquals($cartorders->getSubtotal(),1);
            
    }
 
}
