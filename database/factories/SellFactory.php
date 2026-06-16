<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SellFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'customer_id' => 1,
            'branch_id' => 1,
            'total_amount' => $this->faker->randomFloat(2, 10, 5000),
            'paid_amount' => $this->faker->randomFloat(2, 10, 5000),
            'sell_date' => $this->faker->date(),
            'discount_amount' => 0,
            'payment_method' => 1,
            'payment_status' => 1,
        ];
    }
}
