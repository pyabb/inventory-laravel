<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Menu;
use App\Models\Payment;
use App\Models\Permission;
use App\Models\Product;
use App\Models\Role;
use App\Models\Sell;
use App\Models\SellDetails;
use App\Models\Stock;
use App\Models\User;
use App\Models\Vendor;
use Database\Data\Category as CategoryData;
use Database\Data\Company as CompanyData;
use Database\Data\Customer as CustomerData;
use Database\Data\Menu as MenuData;
use Database\Data\Payment as PaymentData;
use Database\Data\Permission as PermissionData;
use Database\Data\Product as ProductData;
use Database\Data\Role as RoleData;
use Database\Data\Sell as SellData;
use Database\Data\SellDetail as SellDetailData;
use Database\Data\Stock as StockData;
use Database\Data\User as UserData;
use Database\Data\Vendor as VendorData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DevelopmentSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Companies
        foreach (CompanyData::list() as $company)
        {
            Company::factory()->create($company);
        }

        // 2. Menus (must be early so auto-increment IDs align with parent_id references)
        $menus = [];
        $menuData = MenuData::list();
        foreach ($menuData as $menu)
        {
            $menus[] = Menu::factory()->create([
                'parent_id' => $menu['parent_id'],
                'name' => $menu['name'],
                'icon' => $menu['icon'],
                'menu_url' => $menu['menu_url'],
                'status' => $menu['status'],
            ]);
        }

        // 3. Roles
        $roles = [];
        foreach (RoleData::list() as $role)
        {
            $roles[] = Role::factory()->create($role);
        }

        // 4. Users (assign to first role: Superadministrador)
        $users = [];
        foreach (UserData::list() as $user)
        {
            $user['role_id'] = $roles[0]->id;
            $user['password'] = Hash::make('123123');
            $users[] = User::factory()->create($user);
        }

        // 5. Categories
        $categories = [];
        foreach (CategoryData::list() as $i => $category)
        {
            $created = Category::factory()->create($category);
            $legacyId = 34 + $i;
            $categoryLegacyMap[$legacyId] = $created->id;
            $categories[] = $created;
        }

        // 6. Vendors
        $vendors = [];
        foreach (VendorData::list() as $i => $vendor)
        {
            $created = Vendor::factory()->create($vendor);
            $legacyId = 76 + $i;
            $vendorLegacyMap[$legacyId] = $created->id;
            $vendors[] = $created;
        }

        // 7. Products (map legacy category_id to new IDs)
        $products = [];
        $legacyProductIds = ProductData::legacyIds();
        foreach (ProductData::list() as $i => $product)
        {
            $product['category_id'] = $categoryLegacyMap[$product['category_id']];
            $created = Product::factory()->create($product);
            $productLegacyMap[$legacyProductIds[$i]] = $created->id;
            $products[] = $created;
        }

        // 8. Customers
        $customers = [];
        foreach (CustomerData::list() as $i => $customer)
        {
            $created = Customer::factory()->create($customer);
            $legacyId = 37 + $i;
            $customerLegacyMap[$legacyId] = $created->id;
            $customers[] = $created;
        }

        // 9. Stocks
        $stocks = [];
        $legacyStockIds = [55, 56];
        foreach (StockData::list() as $i => $stock)
        {
            $stock['category_id'] = $categoryLegacyMap[$stock['category_id']] ?? $categories[0]->id;
            $stock['product_id'] = $productLegacyMap[$stock['product_id']] ?? $products[0]->id;
            $stock['vendor_id'] = $vendorLegacyMap[$stock['vendor_id']] ?? $vendors[0]->id;
            $stock['user_id'] = $users[0]->id;
            $created = Stock::factory()->create($stock);
            $stockLegacyMap[$legacyStockIds[$i]] = $created->id;
            $stocks[] = $created;
        }

        // 10. Sells
        $sells = [];
        $sellLegacyIds = [51];
        foreach (SellData::list() as $i => $sell)
        {
            $sell['user_id'] = $users[0]->id;
            $sell['customer_id'] = $customerLegacyMap[$sell['customer_id']] ?? $customers[0]->id;
            $created = Sell::factory()->create($sell);
            $sellLegacyMap[$sellLegacyIds[$i]] = $created->id;
            $sells[] = $created;
        }

        // 11. Sell details
        foreach (SellDetailData::list() as $detail)
        {
            $detail['stock_id'] = $stockLegacyMap[$detail['stock_id']] ?? $stocks[0]->id;
            $detail['sell_id'] = $sellLegacyMap[$detail['sell_id']] ?? $sells[0]->id;
            $detail['product_id'] = $productLegacyMap[$detail['product_id']] ?? $products[0]->id;
            $detail['category_id'] = $categoryLegacyMap[$detail['category_id']] ?? $categories[0]->id;
            $detail['vendor_id'] = $vendorLegacyMap[$detail['vendor_id']] ?? $vendors[0]->id;
            $detail['user_id'] = $users[0]->id;
            SellDetails::factory()->create($detail);
        }

        // 12. Payments
        foreach (PaymentData::list() as $payment)
        {
            $payment['sell_id'] = $sellLegacyMap[$payment['sell_id']] ?? $sells[0]->id;
            $payment['customer_id'] = $customerLegacyMap[$payment['customer_id']] ?? $customers[0]->id;
            $payment['user_id'] = $users[0]->id;
            Payment::factory()->create($payment);
        }

        // 13. Permissions (map by role index and menu index)
        foreach (PermissionData::list() as $permGroup)
        {
            $role = $roles[$permGroup['role_index']];
            foreach ($permGroup['menu_indexes'] as $menuIndex)
            {
                Permission::factory()->create([
                    'role_id' => $role->id,
                    'menu_id' => $menus[$menuIndex]->id,
                ]);
            }
        }
    }
}
