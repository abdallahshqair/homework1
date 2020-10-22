<?php

namespace Database\Seeders;

use App\Models\Order_Product;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderproduct = Order_Product::factory()->count(3)->create();
        return $orderproduct;


    }
    }
