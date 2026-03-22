<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\factory as Faker;

class Reports extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 20; $i++) {
            DB::table('Reports')->insert([
                'user_id' => $faker->randomElement(DB::Table('Users')->pluck('id')->toArray()),
                'product_id' => $faker->randomElement(DB::Table('Products')->pluck('id')->toArray()),
                'status' => $faker->randomElement(['Resolved', 'Not Resolved']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
