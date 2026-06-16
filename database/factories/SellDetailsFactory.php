<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SellDetailsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'stock_id' => 1,
            'sell_id' => 1,
            'product_id' => 1,
            'category_id' => 1,
            'vendor_id' => 1,
            'user_id' => 1,
            'chalan_no' => $this->faker->date(),
            'selling_date' => $this->faker->date(),
            'customer_id' => '1',
            'sold_quantity' => $this->faker->numberBetween(1, 50),
            'buy_price' => $this->faker->randomFloat(2, 1, 500),
            'sold_price' => $this->faker->randomFloat(2, 5, 1000),
            'total_buy_price' => $this->faker->randomFloat(2, 1, 5000),
            'total_sold_price' => $this->faker->randomFloat(2, 5, 10000),
            'discount' => 0,
            'discount_type' => 1,
            'discount_amount' => 0,
        ];
    }
}
