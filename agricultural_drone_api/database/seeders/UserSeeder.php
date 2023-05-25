<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users=[
            ['name' => 'John', 'email' => 'john@gmail.com', 'password'=>'123'],
            ['name' => 'lovest','email' => 'lovest@gmail.com', 'password'=>'123'],
            ['name' => 'darath', 'email' => 'darath@gmail.com', 'password'=>'123'],
            ['name' => 'kiki', 'email' => 'kiki@gmail.com', 'password'=>'123'],
        ];
        User::insert($users);
    }
}
