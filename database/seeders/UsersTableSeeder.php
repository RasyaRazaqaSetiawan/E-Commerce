<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password'=> Hash::make('admin123'),
                'status' => 'admin',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Rasya',
                'email' => 'rasya@gmail.com',
                'password'=> Hash::make('12345678'),
                'status' => 'user',
                'remember_token' => Str::random(10),
            ],
        ]);
    }
}
