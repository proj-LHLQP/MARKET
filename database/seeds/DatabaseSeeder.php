<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

		// $this->call(UsersTableSeeder::class);

		$roleAdmin = Role::create(['name' => config('access.roles.admin')]);

		$listUser = Permission::create(['name' => 'view-user']);
		$createUser = Permission::create(['name' => 'create-user']);
		$editUser = Permission::create(['name' => 'edit-user']);
		$deleteUser = Permission::create(['name' => 'delete-user']);

		$listCustomer = Permission::create(['name' => 'list-customer']);
		$createCustomer = Permission::create(['name' => 'create-customer']);
		$editCustomer = Permission::create(['name' => 'edit-customer']);
		$deleteCustomer = Permission::create(['name' => 'delete-customer']);

		$listProduct = Permission::create(['name' => 'list-product']);
		$createProduct = Permission::create(['name' => 'create-product']);
		$editProduct = Permission::create(['name' => 'edit-product']);
		$deleteProduct = Permission::create(['name' => 'delete-product']);

		$listCategory = Permission::create(['name' => 'list-category']);
		$createCategory = Permission::create(['name' => 'create-category']);
		$editCategory = Permission::create(['name' => 'edit-category']);
		$deleteCategory = Permission::create(['name' => 'delete-category']);

		$listRole = Permission::create(['name' => 'list-role']);
		$createRole = Permission::create(['name' => 'create-role']);
		$editRole = Permission::create(['name' => 'edit-role']);
		$deleteRole = Permission::create(['name' => 'delete-role']);

		$listRate = Permission::create(['name' => 'list-rate']);
		$createRate = Permission::create(['name' => 'create-rate']);
		$editRate = Permission::create(['name' => 'edit-rate']);
		$deleteRate = Permission::create(['name' => 'delete-rate']);


		$roleAdmin->syncPermissions([
									$perEditProduct,
									$perEditUser,

								]);



    }
}
