<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name' => 'doctor',
                'unique_id' => "doc101",
                'email' => 'doc@gmail.com',
                'role' => 'doctor',
                'password' => Hash::make('Oluwadara+1'),
            ]
        );
    }
}