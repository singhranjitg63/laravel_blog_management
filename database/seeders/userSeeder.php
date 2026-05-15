<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 1; $i < 10 ; $i++){
            $userData = new User;
            $userData->name =  $faker->name;
            $userData->email = $faker->email;
            $userData->password = $faker->password;
            $userData->role = "Auther";
            $userData->save();
        }
    }
}
