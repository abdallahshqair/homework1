<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::factory()->count(3)->create();
        return $product;


    }
}
