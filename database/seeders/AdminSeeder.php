<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name' => 'Administrator',
               'email' => 'admin@admin',
               'password' => bcrypt('adminadmin'),
               'remember_token' => null,
            ]
            ];
            User::insert($users);
    }
}
