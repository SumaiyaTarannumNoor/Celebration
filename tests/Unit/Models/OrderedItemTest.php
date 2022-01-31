<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
// $table->id();
// $table->bigInteger('order_id')->unsigned();
// $table->bigInteger('customer_id')->unsigned();
// $table->string('name');
// $table->string('price');
// $table->bigInteger('product_id')->unsigned();
// $table->bigInteger('quantity')->unsigned();
class OrderedItemTest extends TestCase
{
    public function test_id()
    {
        $order= new \App\Models\OrderedItem();
        $order->setId(1);
        $this->assertEquals($order->getId(),1);
            
    }
    public function order_id()
    {
        $order= new \App\Models\OrderedItem();
        $order->setOrderId(1);
        $this->assertEquals($order->getOrderId(),1);
            
    }
    public function test_customer_id()
    {
        $orders= new \App\Models\OrderedItem();
        $orders->setCustomerId(1);
        $this->assertEquals($orders->getCustomerId(),1);
            
    }

    public function test_product_id()
    {
        $orders= new \App\Models\OrderedItem();
        $orders->setProductId(1);
        $this->assertEquals($orders->getProductId(),1);
            
    }

    public function test_product_price()
    {
        $orders= new \App\Models\OrderedItem();
        $orders->setPrice(1);
        $this->assertEquals($orders->getPrice(),1);
            
    }
    public function test_quantity()
    {
        $orders= new \App\Models\OrderedItem();
        $orders->setQuantity(1);
        $this->assertEquals($orders->getQuantity(),1);
            
    }
    public function test_name()
    {
        $orders= new \App\Models\OrderedItem();
        $orders->setName('Furrria');
        $this->assertEquals($orders->getName(),'Furrria');
            
    }
}
