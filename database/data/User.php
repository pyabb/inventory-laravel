<?php

namespace Database\Data;

class User
{
    public static function list(): array
    {
        return [
            [
                'name' => 'John Doe',
                'email' => 'admin@inventory.org',
                'password' => '$2y$10$sNCuUAwoq5Hqph2Fvzy6uun6ZP6shrkhhF/L6uh9MBL4xUIX5yJnK',
                'branch_id' => 1,
                'role_id' => 2,
                'remember_token' => '6zd4CxMA9RCTnuJaxtyhByrBYJsPfV9GtAB4pJE3Ht6YTsIvQ7ETjUVO1jlv',
            ],
        ];
    }
}
