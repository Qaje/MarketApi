<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // User::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0;$i<50;$i++){
            User::Create([
                'name' => $faker->sentence,
                'email' => $faker->email,
                'password' => $faker->password
            ]);
        }
    }
}
