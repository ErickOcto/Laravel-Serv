<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => "Admin",
                'email' => "admin@example.com",
                'password' => bcrypt('password'),
            ],
            [
                'name' => "Customer",
                'email' => "cust@example.com",
                'password' => bcrypt('password'),
            ],
            [
                'name' => "Freelancer",
                'email' => "fl@example.com",
                'password' => bcrypt('password'),
            ],
        ];

        $dataDetail = [
            [
                'user_id' => 1,
                'photo' => '',
                'role' => 'admin',
                'contact_number' => "1234567890",
                'biography' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, reprehenderit?'
            ],
            [
                'user_id' => 2,
                'photo' => '',
                'role' => 'buyer',
                'contact_number' => "1234567890",
                'biography' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, reprehenderit?'
            ],
            [
                'user_id' => 3,
                'photo' => '',
                'role' => 'freelancer',
                'contact_number' => "1234567890",
                'biography' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, reprehenderit?'
            ],
        ];
        
        User::insert($data);
        UserDetail::insert($dataDetail);
    }
}
