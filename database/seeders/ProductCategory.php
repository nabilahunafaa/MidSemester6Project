<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ProductCategory')->insert([
            [
                'category_name' => 'electronic',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'fashion',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'food',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'cosmetic',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'industrial',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
