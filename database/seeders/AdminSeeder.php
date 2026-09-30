<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          User::updateOrCreate(
            ['email' => 'admin@tokosaya.test'],   // dicari berdasarkan ini
            [
                'name'     => 'Winda Pratiwi',
                'password' => Hash::make('password123'),
                'role'     => 'admin',
            ]
        );
    }
}
