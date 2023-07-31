<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factoryUsers =[
            [
                'name'=>'admin',
                'lname'=>'user',
                'email'=>'admin@admin.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role'=>'admin'
            ],
            [
                'name'=>'recruiter',
                'lname'=>'user',
                'email'=>'recruiter@recruiter.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role'=>'recruiter'
            ],
            [
                'name'=>'candidate',
                'lname'=>'user',
                'email'=>'candidate@candiate.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role'=>'candidate'
            ],
        ];
        foreach ($factoryUsers as $user) {
            $newUser =  User::factory()->create([
                'name' => $user['name'],
                'lname' => $user['lname'],

                'email' => $user['email'],
                'password' => $user['password'],
            ]);
            $newUser->assignRole($user['role']);
        }

    }
}
