<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
