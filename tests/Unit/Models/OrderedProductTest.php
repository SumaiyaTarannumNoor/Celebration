<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;

class OrderedProductTest extends TestCase
{
    public function test_id()
    {
        $order= new \App\Models\OrderedProduct();
        $order->setId(1);
        $this->assertEquals($order->getId(),1);
            
    }
    public function order_id()
    {
        $order= new \App\Models\OrderedProduct();
        $order->setOrderId(1);
        $this->assertEquals($order->getOrderId(),1);
            
    }
    public function test_customer_id()
    {
        $orders= new \App\Models\OrderedProduct();
        $orders->setCustomerId(1);
        $this->assertEquals($orders->getCustomerId(),1);
            
    }

    public function test_product_id()
    {
        $orders= new \App\Models\OrderedProduct();
        $orders->setProductId(1);
        $this->assertEquals($orders->getProductId(),1);
            
    }

    public function test_product_price()
    {
        $orders= new \App\Models\OrderedProduct();
        $orders->setPrice(1);
        $this->assertEquals($orders->getPrice(),1);
            
    }
    public function test_quantity()
    {
        $orders= new \App\Models\OrderedProduct();
        $orders->setQuantity(1);
        $this->assertEquals($orders->getQuantity(),1);
            
    }
    public function test_name()
    {
        $orders= new \App\Models\OrderedProduct();
        $orders->setName('Furrria');
        $this->assertEquals($orders->getName(),'Furrria');
            
    }
}
