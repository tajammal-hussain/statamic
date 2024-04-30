<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin 1',
                'email' => 'admin1@cedar.com',
                'email_verified_at' => '2024-04-09 05:31:55.000',
                'password' => Hash::make('11223344'),
            ],
            [
                'name' => 'Admin 2',
                'email' => 'admin2@cedar.com',
                'email_verified_at' => '2024-04-16 05:31:50.000',
                'password' => Hash::make('11223344'),
            ],

        ];


        DB::table('users')->insert($users);
    }
}
