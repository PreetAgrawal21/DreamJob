<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=['admin','recruiter','candidate'];
        foreach($roles as $role){
            DB::table('roles')->insert([
                'name' => $role,
                'guard_name' => 'web',
            ]);
        }

        $permissions = [
            'view-dashboard', 'create-user', 'edit-user', 'delete-user','create-job','edit-job','delete-job',
            'manage-jobs', 'author-section', 'create-category', 'edit-category', 'delete-category',
            'create-company', 'edit-company', 'delete-company','apply-job',
        ];

        foreach ($permissions as $permission) {
              Permission::create([
                  'name' => $permission
            ]);
        }
        $role = Role::findByName('admin');
        $permissions = Permission::all()->pluck('name');
        foreach ($permissions as $permission) {
            $getPermission = Permission::findByName($permission);
            $role->givePermissionTo($getPermission);
        }
        $role = Role::findByName('recruiter');
        $permissions = ['create-job', 'edit-job', 'delete-job', 'author-section', 'create-company', 'edit-company', 'delete-company'];
        foreach ($permissions as $permission) {
            $getPermission = Permission::findByName($permission);
            $role->givePermissionTo($getPermission);
        }
        $role = Role::findByName('candidate');
        $permissions = ['apply-job'];
        foreach ($permissions as $permission) {
            $getPermission = Permission::findByName($permission);
            $role->givePermissionTo($getPermission);

        }
        // $user = User::create([
        //     'name' =>'admin',
        //     'lname' =>'ladmin',
        //     'email' => 'admin@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$PQNQV4Z9lo5UWgaZ9Jt8X.jcFP1oB9wvWbv5lZG9SR7eO5sGhWQjG',
        // ]);

        // $user->assignRole('admin');
    }
}
