<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                "nama_admin"=>"admin",
                "email"=>"admin@gmail.com",
                "password"=> Hash::make("1234"),
            ]
            ];
            foreach($user as $value) {
                Admin::create($value);
            }
    }
}
