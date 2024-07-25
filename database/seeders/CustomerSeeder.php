<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $email = strtolower($firstName) . $i . '@gmail.com'; // Ensure unique email

            Customer::create([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'phone' => $faker->phoneNumber,
                'password' => Hash::make('password'),
                'status' => 'active',
                'gender' => $faker->randomElement(['male', 'female', 'other']),
                'wallet' => $faker->randomFloat(2, 0, 1000),
                'points' => $faker->numberBetween(0, 100),
            ]);
        }
    }
}
