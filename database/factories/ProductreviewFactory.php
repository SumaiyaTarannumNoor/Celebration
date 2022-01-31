<?php

namespace Database\Factories;

use App\Models\Productreview;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductreviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Productreview::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => 1,
            'provider_id' => 1,
            'product_id' => 1,
            'comment' => 1,
        ];
    }
}
