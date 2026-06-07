<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Ahmed Al Khateeb',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
