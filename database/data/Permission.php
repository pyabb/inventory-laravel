<?php

namespace Database\Data;

class Permission
{
    /**
     * Returns permissions mapping.
     *
     * Each entry maps a role_name to menu positions (0-based index
     * from MenuData::list() order).
     *
     * Role 'Superadministrador' (index 0 in RoleData) gets all 15 menus.
     * Role 'Gerente' (index 1) gets menus: 0,2,5,14
     * Role 'Vendedor' (index 2) gets menus: 0,8,7,6,1,9,10,2
     * Role 'Controlador' (index 3) gets menus: 0,1,2,3,4,5,8,7,6,9,10,11,14
     *
     * @return array
     */
    public static function list(): array
    {
        return [
            // Superadministrador - all 15 menus
            ['role_index' => 0, 'menu_indexes' => [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14]],
            // Gerente
            ['role_index' => 1, 'menu_indexes' => [0,2,5,14]],
            // Vendedor
            ['role_index' => 2, 'menu_indexes' => [0,8,7,6,1,9,10,2]],
            // Controlador
            ['role_index' => 3, 'menu_indexes' => [0,1,2,3,4,5,8,7,6,9,10,11,14]],
        ];
    }
}
