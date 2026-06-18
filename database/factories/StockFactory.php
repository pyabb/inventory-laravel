<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => 1,
            'product_code' => (string) $this->faker->randomNumber(9),
            'product_id' => 1,
            'vendor_id' => 1,
            'user_id' => 1,
            'chalan_no' => $this->faker->date(),
            'buying_price' => $this->faker->randomFloat(2, 1, 500),
            'selling_price' => $this->faker->randomFloat(2, 1, 1000),
            'discount' => 0,
            'stock_quantity' => $this->faker->numberBetween(1, 200),
            'current_quantity' => $this->faker->numberBetween(0, 200),
            'status' => 1,
        ];
    }
}
