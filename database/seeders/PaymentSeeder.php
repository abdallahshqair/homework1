<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
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
            DB::table('payments')->insert([

//                'CheckNum' => $faker->word,
                'CustomerID' => $value,
                'PaymentDate' => $faker->dateTime,
                'Amount' => $value,


            ]);
        }


    }
}
