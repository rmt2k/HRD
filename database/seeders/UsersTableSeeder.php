<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('users')->insert([
            [
                'name' => 'Roy Martogi Tamba',
                'email' => 'roymt007@gmail.com',
                'phone' => '0895338502511',
                'dob' => null,
                'gender' => 'male',
                'address' => 'Batam Sagulung Baru',
                'marriage' => 'single',
                'tanggungan_anak' => '0',
                'tanggungan_lain' => '0',
                'password' => Hash::make('dick4all'),
            ],
            [
                'name' => 'Anthony Samuel',
                'email' => 'anthonys@example.com',
                'phone' => '08123123123',
                'dob' => null,
                'gender' => 'male',
                'address' => '',
                'marriage' => 'married',
                'tanggungan_anak' => '0',
                'tanggungan_lain' => '0',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
