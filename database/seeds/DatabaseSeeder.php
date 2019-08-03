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
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

//        $roleAdmin = Role::create(['name' => 'admin']);
//        $roleCensor = Role::create(['name' => 'censor']);
//        $roleHr = Role::create(['name' => 'hr']);
//        $roleEditor = Role::create(['name' => 'editor']);
//        $roleAccountant = Role::create(['name' => 'accountant']);
//
//        $perEditProduct = Permission::create(['name' => 'edit-product']);
//        $perEditUser = Permission::create(['name' => 'edit-user']);
//        $perExport = Permission::create(['name' => 'export']);
//        $perViewProduct = Permission::create(['name' => 'view-product']);
//        $perViewUser = Permission::create(['name' => 'view-user']);
//
//        $roleAdmin->syncPermissions([$perEditProduct,$perEditUser,$perExport,$perViewProduct,$perViewUser]);
//        $perEditProduct->syncRoles($roleAdmin);
//        $perEditUser->syncRoles($roleAdmin);

    }
}
