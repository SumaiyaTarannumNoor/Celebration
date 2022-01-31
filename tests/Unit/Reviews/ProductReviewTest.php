<?php

namespace Tests\Unit\Reviews;

use App\Models\Productreview;
use Database\Factories\ProductReviewsFactory;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class ProductReviewTest extends TestCase
{

    public function test_user_can_post_product_review()
    {
        $productreview= new \App\Models\Productreview();
        $productreview->setComment('1');

        $db_productreview=Productreview::find($productreview->comment(1));

        $this->assertEquals($productreview->comment,$db_productreview->comment(1));


    }
}
