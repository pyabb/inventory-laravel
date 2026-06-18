<?php

namespace Database\Data;

class Sell
{
    public static function list(): array
    {
        return [
            [
                'user_id' => 12,
                'customer_id' => 40,
                'branch_id' => 1,
                'total_amount' => 412.5,
                'paid_amount' => 412.5,
                'sell_date' => '2023-04-17',
                'discount_amount' => 0,
                'payment_method' => 2,
                'payment_status' => 1,
            ],
        ];
    }
}
