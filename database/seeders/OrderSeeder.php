<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        for($value=1;$value<10;$value++) {
            DB::table('orders')->insert([
                'CustomerID' =>$value,
                'OrderDate' => $faker->dateTime,
                'RequireDate' => $faker->dateTime,
                'ShippedDate' => $faker->dateTime,
                'Status' =>$value,
                'Comments' => $faker->word,
            ]);

        }


    }
}
