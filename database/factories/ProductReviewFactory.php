<?php

namespace SmartCms\Reviews\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use SmartCms\Reviews\Models\ProductReview;

class ProductReviewFactory extends Factory
{
    protected $model = ProductReview::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'product_id' => 1,
            'rating' => $this->faker->numberBetween(1, 5),
            'image' => $this->faker->imageUrl(),
            'comment' => $this->faker->text,
            'status' => $this->faker->boolean(),
            'is_approved' => $this->faker->boolean(),
        ];
    }
}
