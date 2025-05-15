<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id_user'=>'1',
            'username'=> 'saiful',
            'email'=> 'saifulmustf@gmail.com',
            'password'=> 'admin123',
            'created_at'=> date('Y-m-d H:i:s'),

        ]);
    }
}
