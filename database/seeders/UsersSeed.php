<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Leonardo Arthur",
            "email" => "leonardoarthu627@gmail.com",
            "password" => bcrypt("admin")
        ]);
    }
}
