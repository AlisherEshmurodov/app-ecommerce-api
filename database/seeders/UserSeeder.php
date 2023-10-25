<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Adminjon',
            'email' => 'admin@admin.uz',
            'password' => Hash::make('admin123'),
        ]);

        $user->assignRole('admin');



        $user = User::create([
            "name" => "editor",
            "email" => "editor@editor.uz",
            "password" => Hash::make("editor123"),
        ]);

        $user->assignRole("editor");



        $user = User::create([
            "name" => "customer",
            "email" => "customer@customer.uz",
            "password" => Hash::make("customer123"),
        ]);

        $user->assignRole("customer");


//        $admin->roles()->attach(1);
//        $customer->roles()->attach(2);


        $users = User::factory()->count(10)->create();
        foreach ($users as $user) {
            $user->assignRole("customer");
        }
    }
}
