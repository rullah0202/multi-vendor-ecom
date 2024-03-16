<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Hash;
use DB;

class FakeUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,8) as $index){
            DB::table('users')->insert([
                'name'=>$faker->name(),
                'username'=>$faker->userName(),
                'email'	=>$faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => '$2y$12$7Rs1R0m.LcYv6PvW0n0fIuGISr2kDIgV6Snvo8NADCBF43Smjbvra', // password
                'phone'=>$faker->phoneNumber(),
                'address'=>$faker->address(),
                'photo'=>$faker->imageUrl(60,60),
                'remember_token' => Str::random(10),
                'role' =>$faker->randomElement(['admin','vendor','user']),
                'status' =>$faker->randomElement(['active','inactive'])
            ]);
        }

    }
}
