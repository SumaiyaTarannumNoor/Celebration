<?php

namespace Tests\Unit\Unit\Models;

use PHPUnit\Framework\TestCase;

class ServiceReviewsTest extends TestCase
{
  

    public function test_customer_id()
    {
        $productReviews= new \App\Models\Servicereview();
        $productReviews->setCustomerId(1);
        $this->assertEquals($productReviews->getCustomerId(),1);
            
    }

    public function test_provider_id()
    {
        $productReviews= new \App\Models\Servicereview();
        $productReviews->setProviderId(1);
        $this->assertEquals($productReviews->getProviderId(),1);
            
    }
    public function test_product_id()
    {
        $productReviews= new \App\Models\Servicereview();
        $productReviews->setProductId(1);
        $this->assertEquals($productReviews->getProductId(),1);
            
    }
    public function test_comment()
    {
        $productReviews= new \App\Models\Servicereview();
        $productReviews->setComment('1');
        $this->assertEquals($productReviews->getComment(),'1');
            
    }
}
