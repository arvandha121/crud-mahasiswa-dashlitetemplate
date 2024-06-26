<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '+6285159094233',
            'email_verified_at',
            'password' => Hash::make('Password121'),
        ]);
        DB::table('users')->insert([
            'nama' => 'nauvan',
            'email' => 'nauvan121@gmail.com',
            'phone' => '+6281217564952',
            'email_verified_at',
            'password' => Hash::make('Password121'),
        ]);
    }
}
