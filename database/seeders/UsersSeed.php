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
            "name" => "Lucas",
            "email" => "lucas@gmail.com",
            "password" => bcrypt("admin"),
            "permission" => 2
        ]);
    }
}
