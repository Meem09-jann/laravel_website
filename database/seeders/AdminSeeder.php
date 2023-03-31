<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog\Admin;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        Admin::create([
            'id' => 1, //ID 1 IS FOR SUPER ADMIN
            'email' => 'jannatul@ticonsys.com',
            'name' => 'Super Admin',
            'password'=>bcrypt('123456'),
            'account_type' => 'superadmin',
            'status' =>'active',
            
        ]);
        Admin::create([
            'id' => 2, //ID 1 IS FOR SUPER ADMIN
            'email' => 'jannatmeem009@gmail.com',
            'name' => 'Admin',
            'password'=>bcrypt('999999'),
            'account_type' => 'admin',
            'status' =>'active',
            
        ]);
    }
}
