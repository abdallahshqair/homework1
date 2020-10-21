<?php

namespace Database\Seeders;

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

        $faker=Faker::create();

        for($value=1;$value<10;$value++) {
            DB::table('products')->insert([
                'ProductLineID' =>$value,
                'Name' => $faker->name,
                'Scale' =>$value,
                'vendor' => $faker->word,
                'PdtDescription' => $faker->word,
                'BuyPrice' =>$value,
                'QtyLnStock' =>$value,
                'MSRP' =>$value,
            ]);


        }


    }
}
