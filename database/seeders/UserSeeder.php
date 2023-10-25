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
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.uz',
            'password' => Hash::make('admin123'),
        ]);

        $customer = User::create([
            "name" => "customer",
            "email" => "customer@customer.uz",
            "password" => Hash::make("customer123"),
        ]);

//        $admin->roles()->attach(1);
//        $customer->roles()->attach(2);


        User::factory()->count(10)
//            ->hasAttached(Role::find(2))
            ->create();

    }
}
