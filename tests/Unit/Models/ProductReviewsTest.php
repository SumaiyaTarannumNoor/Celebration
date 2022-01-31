<?php

namespace Tests\Unit\Unit\Models;

use PHPUnit\Framework\TestCase;

class ProductReviewsTest extends TestCase
{
    // $table->bigInteger('customer_id')->unsigned();
    //         $table->bigInteger('provider_id')->unsigned();
    //         $table->bigInteger('product_id')->unsigned();
    //         $table->text('comment');

    public function test_customer_id()
    {
        $productReviews= new \App\Models\Productreview();
        $productReviews->setCustomerId(1);
        $this->assertEquals($productReviews->getCustomerId(),1);
            
    }

    public function test_provider_id()
    {
        $productReviews= new \App\Models\Productreview();
        $productReviews->setProviderId(1);
        $this->assertEquals($productReviews->getProviderId(),1);
            
    }
    public function test_product_id()
    {
        $productReviews= new \App\Models\Productreview();
        $productReviews->setProductId(1);
        $this->assertEquals($productReviews->getProductId(),1);
            
    }
    public function test_comment()
    {
        $productReviews= new \App\Models\Productreview();
        $productReviews->setComment('1');
        $this->assertEquals($productReviews->getComment(),'1');
            
    }
}
