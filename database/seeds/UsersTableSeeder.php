<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('users')->delete();

        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$xdn4ZPmRRf4VgqTgLJaUquyq8y7s1rxbOjA6Zc/zIRjLfqNzQ0cOS',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
