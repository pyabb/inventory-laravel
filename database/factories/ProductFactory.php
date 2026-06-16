<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => 1,
            'product_name' => $this->faker->words(3, true),
            'status' => 1,
        ];
    }
}
