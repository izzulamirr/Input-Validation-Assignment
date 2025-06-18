<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
              User::create(
            [
                "name" => "Ali",
                "email" => "Ali@gmail.com",
                "password" => "Ali12345",
            ]
        );
    }
}
