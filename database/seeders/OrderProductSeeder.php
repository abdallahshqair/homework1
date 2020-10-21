<?php

namespace Database\Seeders;

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
        $faker = Faker::create();

        for ($value = 0; $value < 10; $value++) {
            DB::table('order__products')->insert([

                'OrderID' => $value,
                'ProductCode' => $value,
                'Qty' => $value,
                'PriceEach' => $value,


            ]);
        }

    }
    }
