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
        $users = [
            [
                "nama_admin" => "admin1",
                "email" => "admin1@gmail.com",
                "password" => Hash::make("password1"),
            ],
            [
                "nama_admin" => "admin2",
                "email" => "admin2@gmail.com",
                "password" => Hash::make("password2"),
            ],
            // tambahkan user lainnya sesuai kebutuhan
        ];

        foreach ($users as $user) {
            Admin::firstOrCreate(
                ['email' => $user['email']],
                ['nama_admin' => $user['nama_admin'], 'password' => $user['password']]
            );
        }
    }
}
