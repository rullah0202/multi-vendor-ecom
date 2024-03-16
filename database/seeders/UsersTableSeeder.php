<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'name'=>'Vendor Barkat',
                'username'=>'vendorbarkat',
                'email'	=>'vendorbarkat@gmail.com',
                'password' =>Hash::make('123123123'),	
                'role' =>'vendor',
                'status' =>'active'
            ],
            [
                'name'=>'User Amanat',
                'username'=>'useramanat',
                'email'	=>'useramanat@gmail.com',
                'password' =>Hash::make('123123123'),	
                'role' =>'user',
                'status' =>'active'
            ],
            [
                'name'=>'Admin Rahmat',
                'username'=>'adminrahmat',
                'email'	=>'adminrahmat@gmail.com',
                'password' =>Hash::make('123123123'),	
                'role' =>'admin',
                'status' =>'active'
            ]

        ]);
    }
}
