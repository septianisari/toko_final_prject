<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Nay Penjual',
                'email' => 'neypenjual@gmail.com',
                'password' => Hash::make('penjual123'),
                'role_id' => '1'
            ],
            [
                'name' => 'Nay Pembeli',
                'email' => 'naypembeli@gmail.com',
                'password' => Hash::make('pembeli123'),
                'role_id' => '2'
            ]
        );
    }
}
