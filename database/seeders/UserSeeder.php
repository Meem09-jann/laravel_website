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
        User::truncate();
        User::create([
            'id' => 1, //ID 1 IS FOR SUPER ADMIN          
            'username' => 'admin',
            'pass'=>'admin@ticon1250#',
            // 'password'=>bcrypt('admin@ticon1250#'),
            // 'account_type' => 'superadmin',
            //'signup_date' =>date(),
            
        ]);
    }
}
