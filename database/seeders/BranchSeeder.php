<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branch;
use Faker\Factory as Faker;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Branch::create([
                'code' => 'BR' . str_pad($i + 1, 3, '0', STR_PAD_LEFT),
                'name' => $faker->company,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'image' => $faker->imageUrl(640, 480, 'business', true),
                'status' => 'active',
            ]);
        }
    }
}
