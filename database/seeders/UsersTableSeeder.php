<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Md. Rofiqul islam',
            'email' => 'rofiqulislamcmt843@gmail.com',
            'password' => bcrypt('rofiqul'),
            'role_id' => '1',
            'status' => '1',
        ]);
    }
}
