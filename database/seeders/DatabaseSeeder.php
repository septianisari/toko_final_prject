<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role_name' => 'penjual',
        ]);

        Role::create([
            'role_name' => 'pembeli',
        ]);

        User::factory(5)->create();
        // \App\Models\User::factory(10)->create();
    }
}
