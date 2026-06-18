<?php

namespace Database\Data;

class Role
{
    public static function list(): array
    {
        return [
            ['role_name' => 'Superadministrador'],
            ['role_name' => 'Gerente'],
            ['role_name' => 'Vendedor'],
            ['role_name' => 'Controlador'],
        ];
    }
}
