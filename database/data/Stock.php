<?php

namespace Database\Data;

class Stock
{
    public static function list(): array
    {
        return [
            [
                'category_id' => 34,
                'product_code' => '1681681567',
                'product_id' => 30,
                'vendor_id' => 81,
                'user_id' => 12,
                'chalan_no' => '2023-04-16',
                'buying_price' => 9.8,
                'selling_price' => 12.5,
                'discount' => 0,
                'stock_quantity' => 100,
                'current_quantity' => 67,
                'note' => null,
                'status' => 1,
            ],
            [
                'category_id' => 37,
                'product_code' => '1681705778',
                'product_id' => 67,
                'vendor_id' => 81,
                'user_id' => 12,
                'chalan_no' => '2023-04-16',
                'buying_price' => 189.99,
                'selling_price' => 249.99,
                'discount' => 0,
                'stock_quantity' => 48,
                'current_quantity' => 48,
                'note' => null,
                'status' => 1,
            ],
        ];
    }
}
