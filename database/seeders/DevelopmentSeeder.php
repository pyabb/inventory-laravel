<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Menu;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Database\Data\Menu as MenuData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds for development environment.
     */
    public function run(): void
    {
        // Create a default company
        Company::create([
            'name' => 'Inventory',
            'phone' => '0000000000',
            'address' => 'Inventory Address',
        ]);

        // Create a superadmin role for development
        $role=  Role::factory()->create([
            'role_name' => 'Superadministrador',
        ]);

        // Create an admin user for development
        $admin = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'admin@inventory.org',
            'password' => Hash::make('123123'),
            'role_id' => $role->id,
        ]);

        $menuData = MenuData::list();
        foreach ($menuData as $menu)
        {
            $menuItem = Menu::factory()->create([
                'parent_id' => $menu['parent_id'],
                'name' => $menu['name'],
                'icon' => $menu['icon'],
                'menu_url' => $menu['menu_url'],
                'status' => $menu['status'],
            ]);

            Permission::create([
                'role_id' => $admin->role_id,
                'menu_id' => $menuItem->id,
            ]);
        }
    }
}
