<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        role::create(['role_name' => 'Admin']);
        role::create(['role_name' => 'User']);
        role::create(['role_name' => 'KAM Sales']);

    }
}
