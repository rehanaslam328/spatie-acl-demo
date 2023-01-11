<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $permissions = [
           'create-user',
           'edit-user',
           'view-user',
           'delete-user',
           'create-role',
           'edit-role',
           'view-role',
           'delete-role',
           'create-post',
           'edit-post',
           'view-post',
           'delete-post',
        ];


        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
