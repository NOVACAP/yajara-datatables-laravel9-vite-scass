<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $gender = $faker->randomElement(['male', 'female']);
    	// foreach (range(1,200) as $index) {
        //     DB::table('students')->insert([
        //         'name' => $faker->name($gender),
        //         'email' => $faker->email,
        //         'username' => $faker->username,
        //         'phone' => $faker->phoneNumber,
        //         'dob' => $faker->date($format = 'Y-m-d', $max = 'now')
        //     ]);
        // }


        foreach (range(1,100) as $index) {
            DB::table('employees')->insert([
                'emp_name' => $faker->name($gender),
                'email' => $faker->email,
                'gender' => $gender,
                'city' => $faker->city,
                'status' => 1,
            ]);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
