<?php

namespace Database\Data;

class SellDetail
{
    public static function list(): array
    {
        return [
            [
                'stock_id' => 55,
                'sell_id' => 51,
                'product_id' => 30,
                'category_id' => 34,
                'vendor_id' => 81,
                'user_id' => 12,
                'chalan_no' => '2023-04-16',
                'selling_date' => '2023-04-17',
                'customer_id' => '40',
                'sold_quantity' => 33,
                'buy_price' => 9.8,
                'sold_price' => 12.5,
                'total_buy_price' => 323.4,
                'total_sold_price' => 412.5,
                'discount' => 0,
                'discount_type' => 1,
                'discount_amount' => 0,
            ],
        ];
    }
}
