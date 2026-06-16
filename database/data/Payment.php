<?php

namespace Database\Data;

class Payment
{
    public static function list(): array
    {
        return [
            [
                'sell_id' => 51,
                'customer_id' => 40,
                'user_id' => 12,
                'date' => '2023-04-19',
                'paid_in' => 'efectivo',
                'bank_information' => null,
                'amount' => 412,
            ],
            [
                'sell_id' => 51,
                'customer_id' => 40,
                'user_id' => 12,
                'date' => '2023-04-20',
                'paid_in' => 'efectivo',
                'bank_information' => null,
                'amount' => 0.5,
            ],
        ];
    }
}
