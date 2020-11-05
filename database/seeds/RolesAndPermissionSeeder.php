<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Admin;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create admin', 'guard_name' => 'admin']);
        Permission::create(['name' => 'edit admin', 'guard_name' => 'admin']);
        Permission::create(['name' => 'create order', 'guard_name' => 'admin']);
        Permission::create(['name' => 'assign user to compliant', 'guard_name' => 'admin']);
        Permission::create(['name' => 'resolve compliant', 'guard_name' => 'admin']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'cashier' , 'guard_name' => 'admin']);
        $role1->givePermissionTo('create order');

        $role2 = Role::create(['name' => 'support-staff', 'guard_name' => 'admin']);
        $role2->givePermissionTo('resolve compliant');

        $role3 = Role::create(['name' => 'super-admin', 'guard_name' => 'admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider


        $user = Admin::find(1);
        $user->assignRole($role3);

       // composer dump-autoload
       // php artisan db:seed --class=RolesAndPermissionSeeder  

    }
}
