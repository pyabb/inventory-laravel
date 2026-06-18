<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'sell_id' => 1,
            'customer_id' => 1,
            'user_id' => 1,
            'date' => $this->faker->date(),
            'paid_in' => 'efectivo',
            'amount' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
