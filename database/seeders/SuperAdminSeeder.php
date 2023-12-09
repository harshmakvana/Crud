<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Harsh Makvana', 
            'email' => 'harshmakvana2880@gmail.com',
            'password' => Hash::make('harsh2880')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Prince Savaliya', 
            'email' => 'princesavaliya@gmail.com',
            'password' => Hash::make('prince2880')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $studentManager = User::create([
            'name' => 'Vivek Shingala', 
            'email' => 'vivekshingala@gmail.com',
            'password' => Hash::make('vivek2880')
        ]);
        $studentManager->assignRole('Student Manager');
    }
}