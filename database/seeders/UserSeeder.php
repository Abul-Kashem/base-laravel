<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'name' => 'Super Admin',
            'email'=>'admin@gmail.com',
            'mobile_no'=>'01578988855',
            'gender'=>1,
            'password'=>'Admin!@#'
           
        ]);
    }
}
