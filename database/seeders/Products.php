<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            DB::table('Products')->insert([
                'product_name' => $faker->words(2, true),
                'category_id' => $faker->randomElement(DB::Table('ProductCategory')->pluck('id')->toArray()),
                'price' => $faker->numberBetween(5000, 1000000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
